<?php


Route::get('/', 'HomeController@index');

// ada 6 get method

Route::prefix('/accounts')->group( function() {
  Route::post('profiles', 'ProfileController@create'); // createAccountHolderProfile ==
  Route::get('profiles/{profile_id}', 'ProfileController@index'); // getAccountHolderProfile ==
  Route::put('profiles/{profile_id}', 'ProfileController@update'); // updateAccountHolderProfile (sabar jap)
  Route::get('{account_id}', 'AccountController@show'); // getAccountSummary ==
  Route::get('loans', 'LoanController@index'); // getLoanAccounts ==
  Route::get('/', 'AccountController@index'); // getAllAccounts ==
  Route::post('bills', 'BillController@bill_payment'); // billPayment (sabar jap)
  Route::delete('payment/{payment_id}', 'PaymentController@delete'); // cancelPayment ==
  Route::post('payee', 'PayeeController@create'); // addPayee ==
  Route::put('payee/{payee_id}', 'PayeeController@update'); // updatePayee (sabar jap)
  Route::delete('payee/{payee_id}', 'PayeeController@delete'); // deletePayee ==
  Route::post('fd', 'FixedDepositController@create'); // createFixedDeposit
  Route::put('fd/{fd_id}', 'FixedDepositController@pre_closed'); // preCloseFixedDeposit
  Route::get('transaction', 'TransactionController@index'); // getAllTransactions ==
  Route::post('transaction', 'TransactionController@create'); // addTransaction ==
  Route::get('transaction/{account_id}', 'TransactionController@show'); // getTransaction ==

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
