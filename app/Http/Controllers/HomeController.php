<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $title ='Ana Sayfa';
        return view('Welcome', compact('title'));
    }
}