<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    // Website - News
    public function news(){
        $pageConfigs = [
            'pageHeader' => false
        ];

        return view('/pages/website/website-news', [
            'pageConfigs' => $pageConfigs
        ]);
    }

     // Website - Block
     public function block(){
        $pageConfigs = [
            'pageHeader' => false
        ];

        return view('/pages/website/website-block', [
            'pageConfigs' => $pageConfigs
        ]);
    }
}

