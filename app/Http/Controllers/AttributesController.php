<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AttributesController extends Controller
{
    // Attributes - List
    public function list(){
        $pageConfigs = [
            'pageHeader' => false
        ];

        return view('/pages/attributes/list', [
            'pageConfigs' => $pageConfigs
        ]);
    }

     // Attributes - New
     public function new(){
        $pageConfigs = [
            'pageHeader' => false
        ];

        return view('/pages/attributes/new', [
            'pageConfigs' => $pageConfigs
        ]);
        }

   
}

