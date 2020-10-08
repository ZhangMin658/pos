<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
//use App\UserAdditionalInfo;
use Session;
use Auth;
use App\Admin;

//use Hash;
use Intervention\Image\ImageManagerStatic as Image;




class AdminController extends Controller {


   public function view (){


       $list = Admin::orderBy('id', 'desc')
           ->get();

       $data = [
           "list" => $list,
           'title' => 'Admin  list',
       ];

       return view('admin/admin',$data);

}

    public function add (Request $request){


        $name = $request->input('name');
        $email = $request->input('email');
        $no = $request->input('no');
        $pin = $request->input('password');

        $password = Hash::make($request->password);
        $inputArray = array(
            'name' => $name,
            'email' => $email,
            'no' => $no,
            'password' => $password,
            'pin' => $pin,


        );

        $validation = Admin::validate($inputArray );

//        dd($validation->passes(),$validation->errors(),$request->all());

        if ($validation->passes()) {


            $admin =  Admin::create($inputArray);
            return redirect()->route('adminregister')
                ->with('success', "New Admin Added");
        }else {

            return back()
                ->withErrors($validation)
                ->withInput();
        }


    }
    public function update (Request $request){


        $name = $request->input('name');
        $email = $request->input('email');
        $no = $request->input('no');
        $pin = $request->input('password');




        $password = Hash::make($request->password);
        $inputArray = array(
            'name' => $name,
            'email' => $email,
            'no' => $no,
            'password' => $password,
            'pin' => $pin,


        );
        $admin_data=   Admin ::where('id',$request->id)->first();
        if($admin_data->email == $request->email ){


            Admin :: $rules['email']="";

        }

        $validation = Admin::validate($inputArray );

//        dd($validation->passes(),$validation->errors(),$request->all());

        if ($validation->passes()) {


            Admin::where('id',$request->id)->update($inputArray);
            return redirect()->route('admin')
                ->with('success', "Admin Update");
        }

    }
    public function dltadmin(Request $request){

        $query =  Admin::where('id',$request->id)->delete();


        return redirect()->route('admin')
            ->with('success', "$request->name deleted!");








    }

    public function viewlogin(){

        if(Auth::check()) {
          return redirect('dashboard');
        } else {
          return redirect()->route('login');
        }



    }

    public function viewregister(){

        $pageConfigs = [
            'bodyClass' => "bg-full-screen-image",
            'blankPage' => true
        ];
        return view('register', [
            'pageConfigs' => $pageConfigs
        ]);


    }

    public function submitLogin(Request $request) {




//dd($request->all());
        if ( Auth::guard('admin')
            ->attempt([

                'email'=>$request->input('email'),
                'password'=>$request->input('password')
            ])) {


//            Auth::guard('admin')->check()
            $admin = Auth::guard('admin')->user();


            {

                return redirect('dashboard');


            }

        }
        else {

// echo "bad";
// exit();
            return redirect()->route('login')
                ->with('success', 'Ooops! Invalid Email or Password')
                ->withInput();


        }

//	exit;



    }

    public function Adminlogout(Request $request) {



// dd('logout');
//Auth::logout();
//$request->session()->flush();
//Session::flush();
        Auth::guard('admin')->logout();

        return redirect()->route('login');

    }












}
