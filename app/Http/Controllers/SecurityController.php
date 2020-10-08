<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SecurityController extends Controller
{
    // Security - devices
    public function devices(){
        $pageConfigs = [
            'pageHeader' => false
        ];

        return view('/pages/securitys/security-devices', [
            'pageConfigs' => $pageConfigs
        ]);
    }

     // Security - key
     public function key(){
        $pageConfigs = [
            'pageHeader' => false
        ];

        return view('/pages/securitys/security-key', [
            'pageConfigs' => $pageConfigs
        ]);
        }

   
}

