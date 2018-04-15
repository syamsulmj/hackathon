<?php


Route::get('/', 'HomeController@index');
Route::get('account/{account_id}');
Route::post('register', 'Auth\RegisterController@register');

// ada 6 get method

Route::prefix('/accounts')->group( function() {
  Route::post('profiles', 'ProfileController@create'); // createAccountHolderProfile ==
  Route::get('profiles/{profile_id}', 'ProfileController@index'); // getAccountHolderProfile == ++
  Route::put('profiles/{profile_id}', 'ProfileController@update'); // updateAccountHolderProfile (sabar jap)
  Route::get('{account_id}', 'AccountController@show'); // getAccountSummary == ++
  Route::get('loans', 'LoanController@index'); // getLoanAccounts == ++
  Route::get('/', 'AccountController@index'); // getAllAccounts == ++
  Route::post('bills', 'BillController@bill_payment'); // billPayment (sabar jap)
  Route::delete('payment/{payment_id}', 'PaymentController@delete'); // cancelPayment ==
  Route::post('payee', 'PayeeController@create'); // addPayee ==
  Route::put('payee/{payee_id}', 'PayeeController@update'); // updatePayee (sabar jap)
  Route::delete('payee/{payee_id}', 'PayeeController@delete'); // deletePayee ==
  Route::post('fd', 'FixedDepositController@create'); // createFixedDeposit
  Route::put('fd/{fd_id}', 'FixedDepositController@pre_closed'); // preCloseFixedDeposit
  Route::get('transaction', 'TransactionController@index'); // getAllTransactions == ++
  Route::post('transaction', 'TransactionController@create'); // addTransaction ==
  Route::get('transaction/{account_id}', 'TransactionController@show'); // getTransaction == ++
});
