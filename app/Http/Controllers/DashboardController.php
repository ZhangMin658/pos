<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // Dashboard For Full
   
public function dashboard(){
        $pageConfigs = [
            'pageHeader' => false
        ];

        return view('/pages/dashboard/full', [
            'pageConfigs' => $pageConfigs
        ]);
   
}
}

