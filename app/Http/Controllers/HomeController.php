<?php

namespace App\Http\Controllers;
use App\Http\Controllers\HomeController;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('index');
    }

    public function login(){
        return view('login');
    }

    public function about(){
        $data = [
            'name'      => 'Mirza Ukail Falah Triyarso',
            'address'   => 'Cilacap',
            'email'     => '541231122@student.smktelkom-pwt.sch.id'
        ];
        return view('about', $data);

    }
}
