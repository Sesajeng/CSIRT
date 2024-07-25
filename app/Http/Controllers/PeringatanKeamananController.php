<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeringatanKeamananController extends Controller
{
    public function index(){
        return view('peringatan_keamanan');
        }
}
