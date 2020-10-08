<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupportController extends Controller
{
    // support and help - seals
    public function seals(){
        $pageConfigs = [
            'pageHeader' => false
        ];

        return view('/pages/supports/support-seals', [
            'pageConfigs' => $pageConfigs
        ]);
    }

     // support and help  - ticket
     public function ticket(){
        $pageConfigs = [
            'pageHeader' => false
        ];

        return view('/pages/supports/support-ticket', [
            'pageConfigs' => $pageConfigs
        ]);
    }

      // support and help  - faq
      public function faq(){
        $pageConfigs = [
            'pageHeader' => false
        ];

        return view('/pages/supports/support-faq', [
            'pageConfigs' => $pageConfigs
        ]);
    }

    

   
}

