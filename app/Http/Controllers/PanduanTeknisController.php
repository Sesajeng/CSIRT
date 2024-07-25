<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PanduanTeknisController extends Controller
{
    public function index(){
        return view('panduan_teknis');
        }
}

