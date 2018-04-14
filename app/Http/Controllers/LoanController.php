<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\AccountLoans;

class LoanController extends Controller
{
    public function index() {

      $loan_accounts = AccountLoans::all();

      return $loan_accounts;
    }
}
