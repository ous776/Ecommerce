<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        return view('index');
    }

    
    public function electronic()
    {
        return view('electronic');
    }

    
    public function fashion()
    {
        return view('fashion');
    }

    
    public function jewellery()
    {
        return view('jewellery');
    }


}
