<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class beranda_controller extends Controller
{
    public function index(){
        $title = 'Beranda Admin';
 
        return view('beranda.beranda_index',compact('title'));
    }    
}
