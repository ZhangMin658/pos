<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer_group;
use Auth;

class CustomerGroupController extends Controller
{
    // customer - list
    public function index(){
      $pageConfigs = [
          'pageHeader' => false
      ];
      $groups = Customer_group::all();
      return view('pages.customers.groups.index', compact('groups','pageConfigs'));

    }
    // customer - New
    public function create(){
        $pageConfigs = [
            'pageHeader' => false
        ];

        return view('pages.customers.groups.create', [
            'pageConfigs' => $pageConfigs
        ]);
    }



    // customer Insert
    public function store(Request $request) {

      $validatedData = $request->validate([
        'name' => 'required|max:255',
      ]);

      $group = new Customer_group();
      $group->group_name = $request->get('name');
      $group->save();
      return redirect()->route('customer.groups.index');

    }


    public function edit($id) {
      $pageConfigs = [
        'pageHeader' => false
      ];
      $group = Customer_group::find($id);

      return view('pages.customers.groups.edit', [
          'pageConfigs' => $pageConfigs,
          'group' => $group
      ]);


    }


    public function show($id) {
      $pageConfigs = [
        'pageHeader' => false
      ];
      $group = Customer_group::find($id);

      return view('pages.customers.groups.show', [
          'pageConfigs' => $pageConfigs,
          'group' => $group
      ]);


    }

    public function update(Request $request,$id) {
      $validatedData = $request->validate([
        'name' => 'required|max:255',
      ]);

      $group = Customer_group::find($id);
      $group->group_name = $request->get('name');
      $group -> save();
      return redirect()->back();
    }


    public function destroy($id) {
      Customer_group::find($id)->delete();
      return redirect()->route('customer.groups.index');
    }


}

