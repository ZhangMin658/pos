<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    // Report - view
    public function view(){
        $pageConfigs = [
            'pageHeader' => false
        ];

        return view('/pages/reports/view', [
            'pageConfigs' => $pageConfigs
        ]);
    }

   
}

