<?php


Route::get('/', 'HomeController@index');

// ada 6 get method

Route::prefix('/accounts')->group( function() {
  Route::post('profiles', 'ProfileController@create'); //
  Route::get('profiles/{profile_id}', 'ProfileController@index');
  Route::put('profiles/{profile_id}', 'ProfileController@update');
  Route::get('{account_id}', 'AccountController@show');
  Route::get('loans', 'LoanController@index');
  Route::get('/', 'AccountController@index');
  Route::post('bills', 'BillController@bill_payment');
  Route::delete('payment/{payment_id}', 'PaymentController@delete');
  Route::post('payee', 'PayeeController@create');
  Route::put('payee/{payee_id}', 'PayeeController@update');
  Route::delete('payee/{payee_id}', 'PayeeController@delete');
  Route::post('fd', 'FixedDepositController@create');
  Route::put('fd/{fd_id}', 'FixedDepositController@pre_closed');
  Route::get('transaction', 'TransactionController@index');
  Route::post('transaction', 'TransactionController@create');
  Route::get('transaction/{account_id}', 'TransactionController@show');

});

// /Accounts/Profiles/;<profileData> |POST| createAccountHolderProfile ===
// /Accounts/Profiles/{profile_id} |GET| getAccountHolderProfile ===
// /Accounts/Profiles/{profile_id};<profileData> |PUT| updateAccountHolderProfile ===
// /Accounts/{account_id} |GET| getAccountSummary ===
// /Accounts/Loans/ |GET| getLoanAccounts ===
// /Accounts/ |GET| getAllAccounts ===
// /Accounts/Bills;<BillData> |POST| billPayment ===
// /Accounts/Payments/{payment_id} |DELETE| cancelPayment ===
// /Accounts/Payee/;<PayeeData> |POST| addPayee ===
// /Accounts/Payee/{payee_id};<PayeeData> |PUT| updatePayee ===
// /Accounts/Payee/{payee_id} |DELETE| deletePayee ===
// /Accounts/fd;<FDData> |POST| createFixedDeposit ===
// /Accounts/fd/{fd_id>;<FDData> |PUT| preCloseFixedDeposit ===
// /Accounts/Transactions/ |GET| getAllTransactions ===
// /Accounts/Transactions;<TransactionData> |POST| addTransaction ===
// /Accounts/Transactions/{account_id} |GET| getTransaction ===

// createAccountHolderProfile
// getAccountHolderProfile
// updateAccountHolderProfile
// getAccountSummary
// getLoanAccounts
// getAllAccounts
// billPayment
// cancelPayment
// addPayee
// updatePayee
// deletePayee
// createFixedDeposit
// preCloseFixedDeposit
// getAllTransactions
// addTransaction
// getTransaction

// Account
// Profile
// Bill
// Loan
// Payee
// Fixed Deposit
// Payment
// Transaction
