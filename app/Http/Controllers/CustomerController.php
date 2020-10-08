<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;
use App\Models\Customer_group;
use Auth;

class CustomerController extends Controller
{

    // customer - list
    public function index(){
        $pageConfigs = [
            'pageHeader' => false
        ];

        $customers = Customers::orderBy('id','desc')->get();
        return view('pages.customers.index', compact('customers','pageConfigs'));


    }
    // customer - New
    public function create(){
        $pageConfigs = [
            'pageHeader' => false
        ];

        $groups = Customer_group::all();
        return view('/pages/customers/create', [
            'pageConfigs' => $pageConfigs,
            'groups' => $groups
        ]);
    }
 // customer Insert
  public function store(Request $request) {
      $validatedData = $request->validate([
        'cust_name' => 'required|max:255',
        'cust_mob' => 'required|unique:customers|max:255',
        'cust_email' => 'required|email|unique:customers|max:255',
        'cust_area' => 'required',
        'cust_address' => 'required',
        'cust_group' => 'required',
      ]);
      $newcust = new Customers();

      $newcust->cust_name = $request->get('cust_name');
      $newcust->cust_mob = $request->get('cust_mob');
      $newcust->cust_email = $request->get('cust_email');
      $newcust->cust_area = $request->get('cust_area');
      $newcust->cust_address = $request->get('cust_address');
      $newcust->cust_group = $request->get('cust_group');
      $newcust -> save();

      return redirect()->route('customers.index');
  }



    // customer - view
    public function show($id){
        $pageConfigs = [
            'pageHeader' => false
        ];
        $customer = Customers::find($id);
        return view('/pages/customers/view', [
            'pageConfigs' => $pageConfigs,
            'customer' => $customer
        ]);
    }


    // customer - edit
    public function edit($id){
        $pageConfigs = [
            'pageHeader' => false
        ];
        $customer = Customers::find($id);
        $groups = Customer_group::all();

        return view('pages.customers.edit', [
            'pageConfigs' => $pageConfigs,
            'customer' => $customer,
            'groups' => $groups
        ]);
    }

    public function update(Request $request,$id) {
      $validatedData = $request->validate([
        'cust_name' => 'required|max:255',
        'cust_area' => 'required',
        'cust_address' => 'required',
        'cust_group' => 'required',
      ]);

      $customer = Customers::find($id);
      $customer->cust_name = $request->get('cust_name');
      if($request->mob && $request->cust_mob != $customer->cust_mob) {

        $validatedData = $request->validate([
          'cust_mob' => 'required|unique:customers|max:255',
        ]);

        $customer->cust_mob = $request->get('cust_mob');
      }
      if($request->email && $request->cust_email != $customer->cust_email) {
        $validatedData = $request->validate([
          'cust_email' => 'required|unique:customers|max:255',
        ]);
        $customer->cust_email = $request->get('cust_email');
      }
      $customer->cust_area = $request->get('cust_area');
      $customer->cust_address = $request->get('cust_address');
      $customer->cust_group = $request->get('cust_group');
      $customer->save();

      return redirect()->back();
    }

    // customer - destroy
    public function destroy($id) {
        Customers::find($id)->delete();
        return redirect()->route('customers.index');

    }


}

