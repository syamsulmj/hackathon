<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\UserAccounts;
use App\AccountBills;
use App\AccountLoans;
use App\AccountFixedDeposits;
use App\AccountPayments;
use App\AccountTransactions;
use App\DataLog;

class AccountController extends Controller
{
    public function index() {

      DataLog::create([
        'HTTP_action' => 'GET',
        'noun' => 'account',
        'business_operation' => 'getAllAccounts'
      ]);

      $accounts = UserAccounts::all();

      return response()->json($accounts);
    }

    public function show($account_id) {

      DataLog::create([
        'HTTP_action' => 'GET',
        'noun' => 'account',
        'business_operation' => 'getAccounts'
      ]);

      $accounts = UserAccounts::where('account_id', $account_id)->first();

      return $accounts;
    }
}
