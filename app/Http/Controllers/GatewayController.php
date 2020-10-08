<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GatewayController extends Controller
{
    // Gateway - New
    public function new(){
        $pageConfigs = [
            'pageHeader' => false
        ];

        return view('/pages/gateways/gateway-new', [
            'pageConfigs' => $pageConfigs
        ]);
    }

     // Gateway - list
     public function list(){
        $pageConfigs = [
            'pageHeader' => false
        ];

        return view('/pages/gateways/gateway-list', [
            'pageConfigs' => $pageConfigs
        ]);
    }

    
}

