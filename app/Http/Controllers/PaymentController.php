<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\AccountPayments;
use App\DataLog;

class PaymentController extends Controller
{
    public function delete($payment_id) {

      DataLog::create([
        'HTTP_action' => 'DELETE',
        'noun' => 'payment',
        'business_operation' => 'cancelPayment'
      ]);

      if(AccountPayments::where('payment_id', $payment_id)->delete()) {
        return response()->json(['success' => true]);
      }
      else {
        return response()->json(['success' => false]);
      }

    }
}
