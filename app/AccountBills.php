<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccountBills extends Model
{
    protected $fillable = ['account_id', 'bill_id', 'bill_type', 'amount'];
}
