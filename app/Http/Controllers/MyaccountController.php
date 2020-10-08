<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyaccountController extends Controller
{
    // My Account - personal
    public function personal(){
        $pageConfigs = [
            'pageHeader' => false
        ];

        return view('/pages/profiles/myacc-personal', [
            'pageConfigs' => $pageConfigs
        ]);
    }

     // My Account  - company
     public function company(){
        $pageConfigs = [
            'pageHeader' => false
        ];

        return view('/pages/profiles/myacc-company', [
            'pageConfigs' => $pageConfigs
        ]);
    }

    

   
}

