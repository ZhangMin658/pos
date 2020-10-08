<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReceivingsController extends Controller
{
    //receiving
    public function receiving(){
        $pageConfigs = [
            'pageHeader' => false
        ];

        return view('/pages/receivings/receiving', [
            'pageConfigs' => $pageConfigs
        ]);
    }

     
    
}

