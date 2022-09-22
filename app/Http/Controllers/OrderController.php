<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function __contruct()
    {
        return $this->middleware('auth');
    }
    
}
