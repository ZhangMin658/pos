<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Branches;
use Illuminate\Support\Facades\Auth;


class BranchController extends Controller
{

  // Branch - List
public function index(){


  $pageConfigs = [
      'pageHeader' => false
  ];
  $branches = Branches::all();
  return view('pages.branches.index', [
      'pageConfigs' => $pageConfigs,
      'branches' => $branches
  ]);
}

// Branch - New
public function create(){
    $pageConfigs = [
        'pageHeader' => false
    ];

    return view('pages.branches.create', [
        'pageConfigs' => $pageConfigs
    ]);
}



    // customer Insert
 public function store(Request $request) {
    // $validatedData = $request->validate([
    //   'branch_name' => 'required',
    //   'branch_area' => 'required',
    //   'branch_address' => 'required',
    //   'branch_tel' => 'required',
    //   'branch_mob' => 'required',
    //   'branch_location' => 'required',
    //   'branch_rent' => 'required',
    //   'branch_ewa_no' => 'required',
    //   'branch_municipality' => 'required',
    //   'branch_vat' => 'required',
    //   'branch_opening' => 'required',
    //   'branch_closing' => 'required',
    //   'branch_cr_no' => 'required',
    //   'branch_cr_exp' => 'required',
    //   'branch_target' => 'required',
    // ]);

    $newbranch = new Branches();

    $newbranch->branch_name = $request->get('branch_name');
    $newbranch->branch_area = $request->get('branch_area');
    $newbranch->branch_address = $request->get('branch_address');
    $newbranch->branch_tel = $request->get('branch_tel');
    $newbranch->branch_mob = $request->get('branch_mob');
    $newbranch->branch_location = $request->get('branch_location');
    $newbranch->branch_rent = $request->get('branch_rent');
    $newbranch->branch_ewa_no = $request->get('branch_ewa_no');
    $newbranch->branch_municipality = $request->get('branch_municipality');
    $newbranch->branch_vat = $request->get('branch_vat');
    $newbranch->branch_opening = $request->get('branch_opening');
    $newbranch->branch_closing = $request->get('branch_closing');
    $newbranch->branch_cr_no = $request->get('branch_cr_no');
    $newbranch->branch_cr_exp = $request->get('branch_cr_exp');
    $newbranch->branch_target = $request->get('branch_target');

    $newbranch -> save();
    return redirect()->route('branches.index');
}

// Branch - show
public function show($id){
  $pageConfigs = [
      'pageHeader' => false
  ];
  $branch = Branches::find($id);
  return view('pages.branches.show', [
      'pageConfigs' => $pageConfigs,
      'branch' => $branch
  ]);
}

// Branch - edit
public function edit($id){
  $pageConfigs = [
      'pageHeader' => false
  ];
  $branch = Branches::find($id);
  return view('pages.branches.edit', [
      'pageConfigs' => $pageConfigs,
      'branch' => $branch
  ]);
}


    // customer Insert
    public function update(Request $request,$id) {
      // $validatedData = $request->validate([
      //   'branch_name' => 'required',
      //   'branch_area' => 'required',
      //   'branch_address' => 'required',
      //   'branch_tel' => 'required',
      //   'branch_mob' => 'required',
      //   'branch_location' => 'required',
      //   'branch_rent' => 'required',
      //   'branch_ewa_no' => 'required',
      //   'branch_municipality' => 'required',
      //   'branch_vat' => 'required',
      //   'branch_opening' => 'required',
      //   'branch_closing' => 'required',
      //   'branch_cr_no' => 'required',
      //   'branch_cr_exp' => 'required',
      //   'branch_target' => 'required',
      // ]);

      $branch = Branches::find($id);

      $branch->branch_name = $request->get('branch_name');
      $branch->branch_area = $request->get('branch_area');
      $branch->branch_address = $request->get('branch_address');
      $branch->branch_tel = $request->get('branch_tel');
      $branch->branch_mob = $request->get('branch_mob');
      $branch->branch_location = $request->get('branch_location');
      $branch->branch_rent = $request->get('branch_rent');
      $branch->branch_ewa_no = $request->get('branch_ewa_no');
      $branch->branch_municipality = $request->get('branch_municipality');
      $branch->branch_vat = $request->get('branch_vat');
      $branch->branch_opening = $request->get('branch_opening');
      $branch->branch_closing = $request->get('branch_closing');
      $branch->branch_cr_no = $request->get('branch_cr_no');
      $branch->branch_cr_exp = $request->get('branch_cr_exp');
      $branch->branch_target = $request->get('branch_target');

      $branch->save();
      return redirect()->back();
  }


// Branche - destroy
public function destroy($id) {
  Branches::find($id)->delete();
  return redirect()->route('branches.index');

}

}
