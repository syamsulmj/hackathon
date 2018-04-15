<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\UserAccounts;
use App\AccountTransactions;
use App\AccountBills;
use App\AccountLoans;
use App\AccountPayee;
use App\AccountPayments;
use App\AccountFixedDeposits;
use App\DataLog;

class HomeController extends Controller
{
    public function index() {

      if(session('login?')) {
        // session()->flush();
        return view('home.index');
      }
      else {
        return redirect()->action('HomeController@login');
      }

    }

    public function all_account() {

      $accounts = UserAccounts::all();

      return view(
        'home.allaccount',
        compact('accounts')
      );
    }

    public function profile($profile_id) {

      $account = UserAccounts::where('profile_id', $profile_id)->first();

      return view(
        'profile.index',
        compact('account')
      );
    }

    public function login() {

      return view('home.login');
    }

    public function check_login(Request $request) {

      $request->validate([
        'username' => 'required',
        'password' => 'required'
      ]);

      $username = $request->input('username');
      $password = $request->input('password');

      if(User::where('username', $username)->where('password', $password)->count()) {
        $user = User::where('username', $username)->first();
        $account = UserAccounts::all()->where('profile_id', $user->profile_id);

        session([
            'login?' => true,
            'api_token' => $user->api_token,
            'profile_id' => $user->profile_id
          ]);
        return redirect()->action('HomeController@index');
      }
      else {
        return back()->withErrors(['status' => 'Wrong email or password!']);
      }
    }

    public function register() {

      return view('register.index');
    }

    public function data_logs() {
      $data_logs = DataLog::all();

      return view(
        'datalog.index',
        compact('data_logs')
      );
    }


}
