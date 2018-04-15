<?php

Route::get('/', 'HomeController@index');
Route::get('account/{account_id}');
Route::get('register', 'HomeController@register');
Route::get('all-account', 'HomeController@all_account');
Route::get('profile/{profile_id}', 'HomeController@profile');
Route::get('login', 'HomeController@login');
Route::post('login', 'HomeController@check_login');
Route::get('data-logs', 'HomeController@data_logs');

// ada 6 get method

Route::prefix('/accounts')->group( function() {
  Route::post('profiles', 'ProfileController@create'); // createAccountHolderProfile ==
  Route::get('profiles/{profile_id}', 'ProfileController@index'); // getAccountHolderProfile == ++
  Route::put('profiles/{profile_id}/{api_token}', 'ProfileController@update'); // updateAccountHolderProfile (sabar jap)
  Route::get('{account_id}', 'AccountController@show'); // getAccountSummary == ++
  Route::get('loans', 'LoanController@index'); // getLoanAccounts == ++
  Route::get('/', 'AccountController@index'); // getAllAccounts == ++
  Route::post('bills', 'BillController@bill_payment'); // billPayment (sabar jap)
  Route::delete('payment/{payment_id}', 'PaymentController@delete'); // cancelPayment ==
  Route::post('payee', 'PayeeController@create'); // addPayee ==
  Route::put('payee/{payee_id}/{api_token}', 'PayeeController@update'); // updatePayee (sabar jap)
  Route::delete('payee/{payee_id}', 'PayeeController@delete'); // deletePayee ==
  Route::post('fd', 'FixedDepositController@create'); // createFixedDeposit
  Route::put('fd/{fd_id}', 'FixedDepositController@pre_closed'); // preCloseFixedDeposit
  Route::get('transaction', 'TransactionController@index'); // getAllTransactions == ++
  Route::post('transaction', 'TransactionController@create'); // addTransaction ==
  Route::get('transaction/{account_id}', 'TransactionController@show'); // getTransaction == ++
});
