<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Employees;
use Auth;

class EmployeesController extends Controller
{

  // Employee - list SW003
  public function index(){
      $pageConfigs = [
          'pageHeader' => false
      ];
      $employees = Employees::all();
      return view('pages.employees.index', [
          'pageConfigs' => $pageConfigs,
          'employees' => $employees
      ]);
  }

    // Employee - New SW001
    public function create(){
        $pageConfigs = [
            'pageHeader' => false
        ];

        return view('pages.employees.create', [
            'pageConfigs' => $pageConfigs
        ]);
    }
    // Employee - view SW001
    public function view(){
      $pageConfigs = [
          'pageHeader' => false
      ];

      return view('/pages/employees/view', [
          'pageConfigs' => $pageConfigs
      ]);
  }
  // Employee - edit SW001
  public function edit(){
    $pageConfigs = [
        'pageHeader' => false
    ];

    return view('/pages/employees/edit', [
        'pageConfigs' => $pageConfigs
    ]);
}

    public function store(Request $request) {
        $validatedData = $request->validate([
            'emp_photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // 'emp_name' => 'required',
            // 'emp_gender' => 'required',
            // 'emp_phone' => 'required',
            // 'emp_marital' => 'required',
            // 'emp_email' => 'required',
            // 'emp_dob' => 'required',
            // 'emp_nationality' => 'required',
            // 'emp_address' => 'required',
            // 'emp_cpr_no' => 'required',
            // 'emp_passport_no' => 'required',
            // 'emp_working_as' => 'required',
            // 'emp_department' => 'required',
            // 'emp_designation' => 'required',
            // 'emp_joining' => 'required',
            // 'emp_ending' => 'required',
            // 'emp_leaves' => 'required',
            // 'emp_salary_transfer' => 'required',
            // 'emp_basic_salary' => 'required',
            // 'emp_employee_gosi' => 'required',
            // 'emp_lmar_monthly' => 'required',
            // 'emp_company_gosi' => 'required',
            // 'emp_visa_fees' => 'required',
            // 'emp_visa_expiry' => 'required',
            // 'emp_bank' => 'required',
            // 'emp_iban' => 'required',
            // 'emp_files' => 'required',
            // 'emp_blood' => 'required',
            // 'emp_driving' => 'required',
            // 'emp_emrc_name' => 'required',
            // 'emp_emrc_number' => 'required',
            // 'emp_emrc_relationship' => 'required',
            // 'emp_commotions' => 'required',

        ]);

        $newemp = new Employees();
        $newemp->emp_name = $request->get('emp_name');
        $newemp->emp_gender = $request->get('emp_gender');
        $newemp->emp_phone = $request->get('emp_phone');
        $newemp->emp_marital = $request->get('emp_marital');
        $newemp->emp_email = $request->get('emp_email');
        $newemp->emp_dob = $request->get('emp_dob');
        $newemp->emp_nationality = $request->get('emp_nationality');
        $newemp->emp_address = $request->get('emp_address');
        $newemp->emp_cpr_no = $request->get('emp_cpr_no');
        $newemp->emp_passport_no = $request->get('emp_passport_no');
        $newemp->emp_cpr_expire = $request->get('emp_cpr_expire');
        $newemp->emp_passport_expire = $request->get('emp_passport_expire');
        $newemp->emp_working_as = $request->get('emp_working_as');
        $newemp->emp_department = $request->get('emp_department');
        $newemp->emp_designation = $request->get('emp_designation');
        $newemp->emp_joining = $request->get('emp_joining');
        $newemp->emp_ending = $request->get('emp_ending');
        $newemp->emp_leaves = $request->get('emp_leaves');
        $newemp->emp_salary_transfer = $request->get('emp_salary_transfer');
        $newemp->emp_basic_salary = $request->get('emp_basic_salary');
        $newemp->emp_employee_gosi = $request->get('emp_employee_gosi');
        $newemp->emp_lmar_monthly = $request->get('emp_lmar_monthly');
        $newemp->emp_company_gosi = $request->get('emp_company_gosi');
        $newemp->emp_visa_fees = $request->get('emp_visa_fees');
        $newemp->emp_visa_expiry = $request->get('emp_visa_expiry');
        $newemp->emp_bank = $request->get('emp_bank');
        $newemp->emp_iban = $request->get('emp_iban');
        $newemp->emp_files = $request->get('emp_files');
        $newemp->emp_blood = $request->get('emp_blood');
        $newemp->emp_driving = $request->get('emp_driving');
        $newemp->emp_emrc_name = $request->get('emp_emrc_name');
        $newemp->emp_emrc_number = $request->get('emp_emrc_number');
        $newemp->emp_emrc_relationship = $request->get('emp_emrc_relationship');
        $newemp->emp_commotions = $request->get('emp_commotions');

        if($request->has('emp_photo')) {

            $emp_photo = $request->file('emp_photo');
            $filename = Str::slug($request->input('emp_photo')).'_'.time();
            $folder = '/uploads/emp/photo';
            $filePath = $folder.$filename.'.'.$emp_photo->getClientOriginalExtension();
           $emp_photo->move(public_path('uploads/emp/photo'), $filePath);



        }
        $newemp->save();
        return redirect()->route('employees.index');
    }


     // Employee - leave SW004
     public function leave(){
        $pageConfigs = [
            'pageHeader' => false
        ];

        return view('/pages/employees/leave', [
            'pageConfigs' => $pageConfigs
        ]);
    }
    // Employee - leave_new SW005
    public function leave_new(){
        $pageConfigs = [
            'pageHeader' => false
        ];

        return view('/pages/employees/leave_new', [
            'pageConfigs' => $pageConfigs
        ]);
    }
     // Employee - holidays SW006
     public function holidays(){
        $pageConfigs = [
            'pageHeader' => false
        ];

        return view('/pages/employees/holidays', [
            'pageConfigs' => $pageConfigs
        ]);
    }
     // Employee - attends SW007
     public function attends(){
        $pageConfigs = [
            'pageHeader' => false
        ];

        return view('/pages/employees/attends', [
            'pageConfigs' => $pageConfigs
        ]);
    }
     // Employee - latters SW008
     public function latters(){
        $pageConfigs = [
            'pageHeader' => false
        ];

        return view('/pages/employees/latters', [
            'pageConfigs' => $pageConfigs
        ]);
    }
     // Employee - commission SW009
     public function commission(){
        $pageConfigs = [
            'pageHeader' => false
        ];

        return view('/pages/employees/commission', [
            'pageConfigs' => $pageConfigs
        ]);
    }


}

