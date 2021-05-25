<?php

namespace App\Models;
use DB; 
class Ufile {
    function getUploadFile ()
    {
        $data = DB::table('table_name')-> get();
        return response()->json($data);
        // echo "model called";
    }
    
}