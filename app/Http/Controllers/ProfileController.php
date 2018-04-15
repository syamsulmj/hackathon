<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\UserAccounts;

class ProfileController extends Controller
{
    public function index($profile_id) {

      $users = User::all()->where('profile_id', $profile_id);

      return $users;
    }

    public function create(Request $request) {

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

      return response()->json(null, 200);

    }

    public function update($profile_id) {

      $update;
    }
}
