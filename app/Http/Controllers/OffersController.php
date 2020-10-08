<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OffersController extends Controller
{
    // offers - list
    public function list(){
      $pageConfigs = [
          'pageHeader' => false
      ];

      return view('/pages/offers/list', [
          'pageConfigs' => $pageConfigs
      ]);
    }
    // offers - view
    public function view(){
        $pageConfigs = [
            'pageHeader' => false
        ];
  
        return view('/pages/offers/view', [
            'pageConfigs' => $pageConfigs
        ]);
      }
       // offers - new
    public function new(){
        $pageConfigs = [
            'pageHeader' => false
        ];
  
        return view('/pages/offers/new', [
            'pageConfigs' => $pageConfigs
        ]);
      }
     

}
