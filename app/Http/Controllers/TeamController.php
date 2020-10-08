<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamController extends Controller
{
    // Team - user list
    public function userslist(){
        $pageConfigs = [
            'pageHeader' => false
        ];

        return view('/pages/users/team-users-list', [
            'pageConfigs' => $pageConfigs
        ]);
    }

     // Team - user new
     public function usersnew(){
        $pageConfigs = [
            'pageHeader' => false
        ];

        return view('/pages/users/team-users-new', [
            'pageConfigs' => $pageConfigs
        ]);
    }

    // Team - Group list
    public function grouplist(){
        $pageConfigs = [
            'pageHeader' => false
        ];

        return view('/pages/users/team-group-list', [
            'pageConfigs' => $pageConfigs
        ]);
    }

     // Team - Group new
     public function groupnew(){
        $pageConfigs = [
            'pageHeader' => false
        ];

        return view('/pages/users/team-group-new', [
            'pageConfigs' => $pageConfigs
        ]);
    }

    // Team - Roles list
    public function roleslist(){
        $pageConfigs = [
            'pageHeader' => false
        ];

        return view('/pages/users/team-roles-list', [
            'pageConfigs' => $pageConfigs
        ]);
    }

     // Team - Roles new
     public function rolesnew(){
        $pageConfigs = [
            'pageHeader' => false
        ];

        return view('/pages/users/team-roles-new', [
            'pageConfigs' => $pageConfigs
        ]);
    }

   









}

