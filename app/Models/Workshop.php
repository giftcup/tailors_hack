<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

    public function user() {
        $this->belongsTo(User::class);
    }
}
