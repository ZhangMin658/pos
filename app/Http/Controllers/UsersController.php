<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use App\User;

class UsersController extends Controller
{
    // Users - list
    public function index(){
        $pageConfigs = [
            'pageHeader' => false
        ];
        $users = User::all();
        return view('pages.users.index', [
            'pageConfigs' => $pageConfigs,
            'users' => $users
        ]);
    }

     // Users - new
     public function create(){
        $pageConfigs = [
            'pageHeader' => false
        ];

        return view('pages.users.create', [
            'pageConfigs' => $pageConfigs
        ]);
    }

    public function store(Request $request) {
      $validatedData = $request->validate([
        'username' => 'required|unique:users|max:255',
        'name' => 'required|max:255',
        'email' => 'required|unique:users|email',
        'mobile' => 'required|unique:users',
        'password' => 'required',
        'group' => 'required',
      ]);

      $user = new User();
      $user->name = $request->name;
      $user->username = $request->username;
      $user->email = $request->email;
      $user->mobile = $request->mobile;
      $user->password = Hash::make($request->password);
      $user->save();
      $user->assignRole($request->group);

      return redirect()->route('user.index');

    }


    public function edit($id){
      $pageConfigs = [
          'pageHeader' => false
      ];


      $user = User::find($id);

      return view('pages.users.edit', [
          'pageConfigs' => $pageConfigs,
          'user' => $user
      ]);
    }


    public function update(Request $request,$id) {
      $validatedData = $request->validate([
        'name' => 'required|max:255',
        'group' => 'required',
      ]);

      $user = User::find($id);
      $user->name = $request->name;
      if($user->username && $user->username != $request->username) {
        $validatedData = $request->validate([
          'username' => 'unique:users|required',
        ]);
        $user->username = $request->username;
      }

      if($user->email && $user->email != $request->email) {
        $validatedData = $request->validate([
          'email' => 'unique:users|required',
        ]);
        $user->email = $request->email;
      }

      if($user->mobile  && $user->mobile != $request->mobile) {
        $validatedData = $request->validate([
          'mobile' => 'unique:users|required',
        ]);
        $user->mobile = $request->mobile;
      }

      if($user->password) {
        $user->password = Hash::make($request->password);
      }

      if($user->group != $request->group) {
        foreach($user->roles->pluck('name') as $role) {
          $user->removeRole($role);
        }
      }

      $user->save();
      $user->assignRole($request->group);

      return redirect()->route('user.edit',$user->id);

    }


    public function destroy($id) {
        User::find($id)->delete();
        return redirect()->route('user.index');
    }


}

