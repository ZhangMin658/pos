<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    // Services - ecomm
    public function ecomm(){
        $pageConfigs = [
            'pageHeader' => false
        ];

        return view('/pages/services/services-ecomm', [
            'pageConfigs' => $pageConfigs
        ]);
    }

     // Bank Accounts - api
     public function api(){
        $pageConfigs = [
            'pageHeader' => false
        ];

        return view('/pages/services/services-api', [
            'pageConfigs' => $pageConfigs
        ]);
        }

   
}

