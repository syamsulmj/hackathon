<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountFixedDepositsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account_fixed_deposits', function (Blueprint $table) {
            $table->increments('id');
            $table->string('account_id');
            $table->string('deposit_id');
            $table->float('amount');
            $table->float('interest_rate');
            $table->decimal('period');
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
        Schema::dropIfExists('account_fixed_deposits');
    }
}
