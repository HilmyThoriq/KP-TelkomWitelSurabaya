<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class Download extends Controller
{
    public function download(Request $request){
        $file = storage_path()."/app/file/$request->file";
        return Response::download($file);
    }
}
