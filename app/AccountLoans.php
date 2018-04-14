<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccountLoans extends Model
{
    protected $fillable = ['account_id', 'loan_id', 'loan_type', 'loan_amount', 'period_loans'];
}
