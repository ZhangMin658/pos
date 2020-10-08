<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountingController extends Controller
{
    // Accounting - dashbaord
    public function dashbaord(){
      $pageConfigs = [
          'pageHeader' => false
      ];

      return view('/pages/accounting/dashbaord', [
          'pageConfigs' => $pageConfigs
      ]);
    }
    // Accounting - accounts
    public function accounts(){
        $pageConfigs = [
            'pageHeader' => false
        ];
  
        return view('/pages/accounting/accounts', [
            'pageConfigs' => $pageConfigs
        ]);
      }
      // Accounting - accounts New
    public function accounts_new(){
        $pageConfigs = [
            'pageHeader' => false
        ];
  
        return view('/pages/accounting/accounts_new', [
            'pageConfigs' => $pageConfigs
        ]);
      }
       // Accounting - transaction
    public function transaction(){
        $pageConfigs = [
            'pageHeader' => false
        ];
  
        return view('/pages/accounting/transaction', [
            'pageConfigs' => $pageConfigs
        ]);
      }
      // Accounting - po
    public function po(){
        $pageConfigs = [
            'pageHeader' => false
        ];
  
        return view('/pages/accounting/po', [
            'pageConfigs' => $pageConfigs
        ]);
      }
        // Accounting - bills
    public function bills(){
        $pageConfigs = [
            'pageHeader' => false
        ];
  
        return view('/pages/accounting/bills', [
            'pageConfigs' => $pageConfigs
        ]);
      }
      // Accounting - bills_new
    public function bills_new(){
        $pageConfigs = [
            'pageHeader' => false
        ];
  
        return view('/pages/accounting/bills_new', [
            'pageConfigs' => $pageConfigs
        ]);
      }
        // Accounting - payroll
    public function payroll(){
        $pageConfigs = [
            'pageHeader' => false
        ];
  
        return view('/pages/accounting/payroll', [
            'pageConfigs' => $pageConfigs
        ]);
      }
      // Accounting - New installments
    public function payslip(){
        $pageConfigs = [
            'pageHeader' => false
        ];
  
        return view('/pages/accounting/payslip', [
            'pageConfigs' => $pageConfigs
        ]);
      }
       // Accounting - closing
    public function closing(){
        $pageConfigs = [
            'pageHeader' => false
        ];
  
        return view('/pages/accounting/closing', [
            'pageConfigs' => $pageConfigs
        ]);
      }
       // Accounting - closing_month
    public function closing_month(){
        $pageConfigs = [
            'pageHeader' => false
        ];
  
        return view('/pages/accounting/closing_month', [
            'pageConfigs' => $pageConfigs
        ]);
      }

      // Accounting - closing_month_report
    public function closing_month_report(){
        $pageConfigs = [
            'pageHeader' => false
        ];
  
        return view('/pages/accounting/closing_month_report', [
            'pageConfigs' => $pageConfigs
        ]);
      }
       // Accounting - clear
    public function clear(){
        $pageConfigs = [
            'pageHeader' => false
        ];
  
        return view('/pages/accounting/clear', [
            'pageConfigs' => $pageConfigs
        ]);
      }
      

}
