<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class RFC2350Controller extends Controller
{
    public function index(){
        return view('rfc2350');
        }

        public function show()
        {
            $path = storage_path('app/public/uploads/');
    
            if (!File::exists($path)) {
                abort(404);
            }
    
            $file = File::get($path);
            $type = File::mimeType($path);
    
            return response($file, 200)->header("Content-Type", $type);
        }
    }

