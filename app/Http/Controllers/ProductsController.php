<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    // products - list
    public function list(){
      $pageConfigs = [
          'pageHeader' => false
      ];

      return view('/pages/products/list', [
          'pageConfigs' => $pageConfigs
      ]);
    }
    // products - new
    public function new(){
        $pageConfigs = [
            'pageHeader' => false
        ];

        return view('/pages/products/new', [
            'pageConfigs' => $pageConfigs
        ]);
      }
       // products - view
    public function view(){
        $pageConfigs = [
            'pageHeader' => false
        ];

        return view('/pages/products/view', [
            'pageConfigs' => $pageConfigs
        ]);
      }
       // products - view
      public function damage(){
      $pageConfigs = [
          'pageHeader' => false
      ];

      return view('/pages/products/damage', [
          'pageConfigs' => $pageConfigs
      ]);
    }


}
