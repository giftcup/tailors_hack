<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Workshop extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'town',
        'street',
        'created_by',
        'code'
    ];

    public static function boot() {
        parent::boot();
        static::created(function ($workshop) {
            $workshop->slug = $workshop->createSlug($workshop->name);
            $workshop->code = $workshop->createCode();
            $workshop->save();
        });
    }

    public function createCode()
    {
        do {
            define('WORKSHOP', 'WRK');
            $rand =  str()->random(4);
            $code = WORKSHOP . $rand;
        } while(static::where('code', $code)->exists());

        return $code;
    }

    private function createSlug($name)
    {
        if (static::whereSlug($slug = Str::slug($name))->exists()) {

            $max = static::whereName($name)->latest('id')->skip(1)->value('slug');

            if (isset($max[-1]) && is_numeric($max[-1])) {

                return preg_replace_callback('/(\d+)$/', function ($matches) {

                    return $matches[1] + 1;
                }, $max);
            }
            return "{$slug}-2";
        }
        return $slug;
    }

    public function users() {
       return $this->hasMany(User::class);
    }
    
    public function customers() {
        return $this->hasMany(Customer::class);
    }

    public function user() {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function orders()
    {
        return $this->hasManyThrough(Order::class, Customer::class);
    }
}
