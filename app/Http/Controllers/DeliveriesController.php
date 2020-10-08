<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeliveriesController extends Controller
{
    // Deliveries - list
    public function deliveries(){
        $pageConfigs = [
            'pageHeader' => false
        ];

        return view('/pages/deliveries/deliveries', [
            'pageConfigs' => $pageConfigs
        ]);
    }

     

   
}

