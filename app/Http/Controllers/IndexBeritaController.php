<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexBeritaController extends Controller
{
    public function index()
    {
   return view('index_berita');
    }
}
