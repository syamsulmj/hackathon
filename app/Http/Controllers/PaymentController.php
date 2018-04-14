<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\AccountPayments;

class PaymentController extends Controller
{
    public function index() {
      
    }

    public function delete($payment_id) {
      AccountPayments::where('payment_id', $payment_id)->delete();

      return response()->json(null, 204);
    }
}
