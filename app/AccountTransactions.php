<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccountTransactions extends Model
{
    protected $fillable = ['account_id','transaction_id','recipient_bank','recipient_account_no','type_transaction','amount'];
}
