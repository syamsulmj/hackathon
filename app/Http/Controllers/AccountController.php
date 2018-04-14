<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Users;
use App\UserAccounts;
use App\AccountBills;
use App\AccountLoans;
use App\AccountFixedDeposits;
use App\AccountPayments;
use App\AccountTransactions;

class AccountController extends Controller
{
    public function index() {
      $accounts = UserAccounts::all();

      return $accounts;
    }

    public function show($account_id) {
      $accounts = UserAccounts::all()->where('account_id', $account_id);

      return $accounts;
    }

    public function create() {

      
    }

    public function update() {

    }

    // createAccountHolderProfile
    // getAccountHolderProfile
    // updateAccountHolderProfile
    // getAccountSummary
    // getLoanAccounts
    // getAllAccounts
    // billPayment
    // cancelPayment
    // addPayee
    // updatePayee
    // deletePayee
    // createFixedDeposit
    // preCloseFixedDeposit
    // getAllTransactions
    // addTransaction
    // getTransaction

    // Account
    // Profile
    // Bill
    // Loan
    // Payee
    // Fixed Deposit
    // Payment
    // Transaction
}