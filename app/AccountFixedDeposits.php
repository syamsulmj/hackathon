<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccountFixedDeposits extends Model
{
    protected $fillable = ['account_id', 'deposit_id', 'amount', 'interest_rate', 'period'];
}
