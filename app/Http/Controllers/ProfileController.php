<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\UserAccounts;
use App\DataLog;

class ProfileController extends Controller
{
    public function index($profile_id) {

      DataLog::create([
        'HTTP_action' => 'GET',
        'noun' => 'profile',
        'business_operation' => 'getAccountHolderProfile'
      ]);

      $users = User::where('profile_id', $profile_id)->first();

      return response()->json($users);
    }

    public function create(Request $request) {

      DataLog::create([
        'HTTP_action' => 'POST',
        'noun' => 'profile',
        'business_operation' => 'createAccountHolderProfile'
      ]);

      if(User::count()) {
        $getProfileID = User::all()->last()->profile_id;
        $getLastID = substr($getProfileID, strpos($getProfileID, '-') + 1 ) + 1;
        $profile_id = "PF-".$getLastID;
      }
      else {
        $profile_id = "PF-1";
      }

      $address = $request->input('address')." ".$request->input('address2')." ".$request->input('city')." ".$request->input('state')." ".$request->input('zip');

      User::create([
        'profile_id' => $profile_id,
        'username' => $request->input('username'),
        'password' => $request->input('password'),
        'name' => $request->input('name'),
        'race' => $request->input('race'),
        'citizen' => $request->input('citizen'),
        'phone' => $request->input('phone'),
        'address' => $address,
        'email' => $request->input('email'),
        'api_token' => User::generateToken()
      ]);

      return response()->json(
      ['success' => true]);

    }

    public function update($profile_id, $api_token) {

      DataLog::create([
        'HTTP_action' => 'PUT',
        'noun' => 'profile',
        'business_operation' => 'updateAccountHolderProfile'
      ]);

      $user = User::where('profile_id', $profile_id)->where('api_token', $api_token)->first();

      if($user != null) {
        $update = [
          'success' => true,
          'access_token' => $user->api_token,
          'update' => [
            'name' => 'New name',
            'username' => 'New username',
            'address' => 'New address',
            'email' => 'New email'
          ]
        ];

        return response()->json($update);
      }
      else {
        return response()->json(['success' => false]);
      }

    }
}
