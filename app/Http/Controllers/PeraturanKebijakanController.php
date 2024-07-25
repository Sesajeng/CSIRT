<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeraturanKebijakanController extends Controller
{
    public function index(){
        return view('peraturan_kebijakan');
        }
}
