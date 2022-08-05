<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function create() {

    }

    public function store() {
        request()->validate([
            'name' => 'required',
            'tel' => 'required | unique:customers',
        ]);

        

    }
}
