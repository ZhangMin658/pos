<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandsController extends Controller
{
    // brands - List
    public function list(){
        $pageConfigs = [
            'pageHeader' => false
        ];

        return view('/pages/brands/list', [
            'pageConfigs' => $pageConfigs
        ]);
    }

     // brands - New
     public function new(){
        $pageConfigs = [
            'pageHeader' => false
        ];

        return view('/pages/brands/new', [
            'pageConfigs' => $pageConfigs
        ]);
        }

   
}

