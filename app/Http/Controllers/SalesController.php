<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalesController extends Controller
{
    // Sales - dashbaord
    public function dashbaord(){
      $pageConfigs = [
          'pageHeader' => false
      ];

      return view('/pages/sales/dashbaord', [
          'pageConfigs' => $pageConfigs
      ]);
    }
    // Sales - quotations
    public function quotations(){
        $pageConfigs = [
            'pageHeader' => false
        ];
  
        return view('/pages/sales/quotations', [
            'pageConfigs' => $pageConfigs
        ]);
      }
       // Sales - New quotation
    public function quotation_new(){
        $pageConfigs = [
            'pageHeader' => false
        ];
  
        return view('/pages/sales/quotation_new', [
            'pageConfigs' => $pageConfigs
        ]);
      }
      // Sales - invoices
    public function invoices(){
        $pageConfigs = [
            'pageHeader' => false
        ];
  
        return view('/pages/sales/invoices', [
            'pageConfigs' => $pageConfigs
        ]);
      }
        // Sales - New invoice
    public function invoice_new(){
        $pageConfigs = [
            'pageHeader' => false
        ];
  
        return view('/pages/sales/invoice_new', [
            'pageConfigs' => $pageConfigs
        ]);
      }
        // Sales - installments
    public function installments(){
        $pageConfigs = [
            'pageHeader' => false
        ];
  
        return view('/pages/sales/installments', [
            'pageConfigs' => $pageConfigs
        ]);
      }
      // Sales - New installments
    public function installment_new(){
        $pageConfigs = [
            'pageHeader' => false
        ];
  
        return view('/pages/sales/installment_new', [
            'pageConfigs' => $pageConfigs
        ]);
      }
      // Sales - installments page
    public function installment_page(){
        $pageConfigs = [
            'pageHeader' => false
        ];
  
        return view('/pages/sales/installment_page', [
            'pageConfigs' => $pageConfigs
        ]);
      }
       // Sales - installments View
    public function installment_view(){
        $pageConfigs = [
            'pageHeader' => false
        ];
  
        return view('/pages/sales/installment_view', [
            'pageConfigs' => $pageConfigs
        ]);
      }
       // Sales - return
    public function return(){
        $pageConfigs = [
            'pageHeader' => false
        ];
  
        return view('/pages/sales/return', [
            'pageConfigs' => $pageConfigs
        ]);
      }

      // Sales - return View
    public function return_view(){
        $pageConfigs = [
            'pageHeader' => false
        ];
  
        return view('/pages/sales/return_view', [
            'pageConfigs' => $pageConfigs
        ]);
      }

}
