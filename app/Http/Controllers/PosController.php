<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PosController extends Controller
{

    // POS Page (Layout 1) //
    public function pos(){
        $pageConfigs = [
            'pageHeader' => false
        ];

        return view('/pages/pos/pos', [
            'pageConfigs' => $pageConfigs
        ]);
    }

   // POS Page (Layout 1) //
   public function pos2(){
    $pageConfigs = [
        'pageHeader' => false
    ];

    return view('/pages/pos/pos2', [
        'pageConfigs' => $pageConfigs
    ]);
    }



    public function payment(){
        $pageConfigs = [
            'pageHeader' => false
        ];

        return view('/pages/pos/payment', [
            'pageConfigs' => $pageConfigs
        ]);
    }


   
}

