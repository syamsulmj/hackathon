<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\AccountTransactions;

class TransactionController extends Controller
{
    public function index() {
      $transactions = AccountTransactions::all();

      return $transactions;
    }

    public function show($account_id) {

      $transactions = AccountTransactions::all()->where('account_id', $account_id);

      return $transactions;
    }

    public function create(Request $request) {

      if(AccountTransactions::count()) {
        $getTransactionID = AccountTransactions::all()->last()->payee_id;
        $getLastID = substr($getTransactionID, strpos($getTransactionID, '-') + 1 ) + 1;
        $transaction_id = "TR-".$getLastID;
      }
      else {
        $transaction_id = "TR-1";
      }

      AccountTransactions::create([
        'account_id' => session('transaction_id'),
        'transaction_id' => $transaction_id,
      ]);
    }
}
