<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Suppliers;
use App\Models\Customers;
use Auth;

class SuppliersController extends Controller
{

    // customer - list
    public function index(){
      $pageConfigs = ['pageHeader' => false];
     $customers = Customers::where('cust_group', '=', 'Supplier')->get();
      //$customers = Customers::all();
     //$customers = Customers::where('cust_group', '=', 'Supplier')->get();

      return view('pages.suppliers.index', compact('customers','pageConfigs'));
    }


    // Suppliers - New
    public function new(){
        $pageConfigs = [
            'pageHeader' => false
        ];

        return view('/pages/suppliers/new', [
            'pageConfigs' => $pageConfigs
        ]);
    }


// Merchant Insert
public function save(Request $request) {
    $newsupplier = new Customers();

    $newsupplier->cust_name = $request->get('supp_name');
    $newsupplier->cust_tel = $request->get('supp_tel');
    $newsupplier->cust_mob = $request->get('supp_mob');
    $newsupplier->cust_address = $request->get('supp_address');
    $newsupplier->cust_email = $request->get('supp_email');
    $newsupplier->cust_group = "Supplier";

    $newsupplier -> save();
    return redirect('suppliers');
}


}

