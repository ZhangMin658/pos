<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileManagerController extends Controller
{
     // Filemanager App
     public function file_manager()
     {
         $pageConfigs = [
             'pageHeader' => false,
             'contentLayout' => "content-left-sidebar",
             'bodyClass' => 'file-manager-application',
             'sidebarCollapsed' => true
             
         ];
 
         return view('/pages/app-file-manager', ['pageConfigs' => $pageConfigs]);
     }
}
