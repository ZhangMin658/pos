<?php

namespace App\Http\Controllers;

class EmailAppController extends Controller
{
    // Email App
    public function emailApp()
    {
        $pageConfigs = [
            'pageHeader' => false,
            'contentLayout' => "content-left-sidebar",
            'bodyClass' => 'email-application',
        ];

        return view('/pages/app-email', ['pageConfigs' => $pageConfigs]);
    }
}
