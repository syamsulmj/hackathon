<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\AccountPayee;

class PayeeController extends Controller
{
    public function index() {

    }

    public function create(Request $request) {

      if(AccountPayee::count()) {
        $getPayeeID = AccountPayee::all()->last()->payee_id;
        $getLastID = substr($getPayeeID, strpos($getPayeeID, '-') + 1 ) + 1;
        $payee_id = "PY-".$getLastID;
      }
      else {
        $payee_id = "PY-1";
      }

      AccountPayee::create([
        'payee_id' => $payee_id,
        'amount' => $request->input('amount')
      ]);

      return back();
    }

    public function update() {

    }

    public function delete($payee_id) {
      AccountPayee::where('payee_id', $payee_id)->delete();
    }
}
