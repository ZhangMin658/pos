<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalendarController extends Controller
{
    //calendar
    public function calendar(){
        $pageConfigs = [
            'pageHeader' => false
        ];

        return view('/pages/calendar/calendar', [
            'pageConfigs' => $pageConfigs
        ]);
    }

     
    
}

