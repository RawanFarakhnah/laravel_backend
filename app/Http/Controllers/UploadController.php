<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Ufile;
use Illuminate\Http\Request;

class UploadController extends Controller {
    function getUploadFile(){
        $uploadFile = new Ufile();
        $uploadFile -> getUploadFile();
    }

    function reciveUploadFile (Request $request)
    {
        $file = $request -> file('file');
        $uploadPath = "public/files";
        $originalFile = $file -> getClientOriginalNaame();
        $file->move( $uploadPath , $originalFile);
    }
}