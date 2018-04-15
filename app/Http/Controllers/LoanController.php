<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\AccountLoans;
use App\DataLog;

class LoanController extends Controller
{
    public function index() {

      DataLog::create([
        'HTTP_action' => 'GET',
        'noun' => 'loan',
        'business_operation' => 'getLoanAccounts'
      ]);
      
      $loan_accounts = AccountLoans::all();

      return response()->json($loan_accounts);
    }
}
