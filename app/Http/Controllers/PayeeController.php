<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\AccountPayee;
use App\DataLog;

class PayeeController extends Controller
{
    public function create(Request $request) {

      DataLog::create([
        'HTTP_action' => 'POST',
        'noun' => 'payee',
        'business_operation' => 'addPayee'
      ]);

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

      return response()->json(
      ['success' => true]);
    }

    public function update($payee_id, $api_token) {

      $user = User::where('api_token', $api_token)->first();
      $payee = AccountPayee::where('payee_id', $payee_id)->first();

      DataLog::create([
        'HTTP_action' => 'PUT',
        'noun' => 'payee',
        'business_operation' => 'updatePayee'
      ]);

      if($user != null) {
        $update = [
          'success' => true,
          'access_token' => $user->api_token,
          'update' => [
            'payee_name' => 'New name',
            'method' => 'New method',
            'total' => 'New total'
          ]
        ];

        return response()->json($update);
      }
      else {
        return response()->json(['success' => false]);
      }
    }

    public function delete($payee_id) {

      DataLog::create([
        'HTTP_action' => 'DELETE',
        'noun' => 'payee',
        'business_operation' => 'deletePayee'
      ]);

      if(AccountPayee::where('payee_id', $payee_id)->delete()) {

        return response()->json(['success' => true]);
      }
      else {
        return response()->json(['success' => false])
      }
    }
}
