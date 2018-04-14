<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account_loans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('account_id');
            $table->string('loan_id');
            $table->string('loan_type');
            $table->float('loan_amount');
            $table->decimal('period_loans');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('account_loans');
    }
}
