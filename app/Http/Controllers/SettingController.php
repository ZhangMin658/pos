<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingController extends Controller
{
    // Setting
    public function setting(){
        $pageConfigs = [
            'pageHeader' => false
        ];

        return view('/pages/setting/setting', [
            'pageConfigs' => $pageConfigs
        ]);
    }


   
}

