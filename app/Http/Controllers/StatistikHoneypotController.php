<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatistikHoneypotController extends Controller
{
    public function index(){
        return view('statistik_honeypot');
        }
}
