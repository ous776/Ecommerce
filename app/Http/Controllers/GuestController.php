<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        return view('admin/index');
    }

    
    public function electronic()
    {
        return view('guest/electronic');
    }

    
    public function fashion()
    {
        return view('guest/fashion');
    }

    
    public function jewellery()
    {
        return view('guest/jewellery');
    }


}
