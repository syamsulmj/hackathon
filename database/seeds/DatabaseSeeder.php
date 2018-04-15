<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // test user
        DB::table('user')->insert([
            'profile_id' => "",
            'username' => "markadam",
            'password' => "1234m",
            'name' => "Mark Adam"),
            'ic' => "9811321465174",
            'race' => "Melayu",
            'citizen' => "Malaysian",
            'phone' => "0183367190",
            'address' => "No5 Jalan DCC 2/8 Pusat Serdang",
            'token' => bcrypt('secret'),
            'email' => "mark_adam@gmail.com"
        ]);

        DB::table('account_bills')->insert([
            'account_id' => str_random(10),
            'bill_id' => str_random(10).'@gmail.com',
            'bill_type' => "Medical",
            'amount' => 300.00
        ]);

        DB::table('account_fixed_deposits')->insert([
            'account_id' => str_random(10),
            'deposit_id' => str_random(10).'@gmail.com',
            'amount' => 100.00,
            'interest_rate' => 1.00,
            'period' => 2
        ]);

        DB::table('account_loans')->insert([
            'account_id' => str_random(10),
            'loan_id' => str_random(10).'@gmail.com',
            'loan_type' => "Personal Loan",
            'loan_amount' => "1000",
            'period_loans' => 2
        ]);

        DB::table('account_payees')->insert([
            'account_id' => str_random(10),
            'payee_id' => str_random(10).'@gmail.com',
            'payee_name' => "Amirul",
            'method' => "Credit",
            'total' => 100.00
        ]);

        DB::table('account_payments')->insert([
            'account_id' => str_random(10),
            'payment_id' => str_random(10).'@gmail.com',
            'payment_method' => "Credit",
            'payment_amount' => 100.00
        ]);

        DB::table('account_transactions')->insert([
            'account_id' => str_random(10),
            'transaction_id' => str_random(10).'@gmail.com',
            'recipient_bank' => "Bruce Wayne",
            'recipient_account_no' => str_random(10).'@gmail.com',
            'type_transaction' => "Credit",
            'amount' => 100.00
        ]);
    }
}
