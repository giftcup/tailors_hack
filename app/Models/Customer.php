<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'tel',
        'workshop_id'
    ];

    public static function boot() {
        parent::boot();
        static::created(function ($customer) {
            $customer->slug = $customer->createSlug($customer->name);
            $customer->save();
        });
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

    public function workshop() {
        return $this->belongsTo(Workshop::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
