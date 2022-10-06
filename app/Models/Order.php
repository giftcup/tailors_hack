<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'measurements',
        'delivery_date',
        'dress_type',
        'price',
        'extra_notes',
        'material_image',
        'style_image',
    ];

    protected $dates = [
        'delivery_date'
    ];

    protected $casts = [
        'completed' => 'boolean'
    ];

    public static function boot() {
        parent::boot();
        static::created(function ($order) {
            $order->order_num = $order->createOrderNum();
            $order->save();
        });
    }

    public function createOrderNum()
    {
        do {
            define('ORDER', 'ODR');
            $rand = rand(0, 9999);
            $rand = str_pad($rand, 4, '0', STR_PAD_LEFT);
            $num = ORDER . $rand;
        } while(static::where('order_num', $num)->exists());

        return $num;
    }

    public function customer()
    {
       return $this->belongsTo(Customer::class);
    }

    public function toggleCompleted() {
        $this->update([ 'completed' => !$this->completed ]);
    }
}
