<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    // Categories - List
    public function list(){
        $pageConfigs = [
            'pageHeader' => false
        ];

        return view('/pages/categories/list', [
            'pageConfigs' => $pageConfigs
        ]);
    }

     // Categories - new
     public function new(){
        $pageConfigs = [
            'pageHeader' => false
        ];

        return view('/pages/categories/new', [
            'pageConfigs' => $pageConfigs
        ]);
        }

   
}

