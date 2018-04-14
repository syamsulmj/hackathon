<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Users;
use App\UserAccounts;

class ProfileController extends Controller
{
    public function index($profile_id) {

      $users = Users::all()->where('profile_id', $profile_id);

      return $users;
    }

    public function create() {

      if(Users::count()) {
        $getProfileID = Users::all()->last()->profile_id;
        $getLastID = substr($getProfileID, strpos($getProfileID, '-') + 1 ) + 1;
        $profile_id = "PF-".$getLastID;
      }
      else {
        $profile_id = "PF-1";
      }

      Users::create([
        'profile_id' => $profile_id,
        'username' => $request->input('username'),
        'password' => $request->input('password'),
        'name' => $request->input('name'),
        'ic' => $request->input('ic'),
        'age' => $request->input('age'),
        'race' => $request->input('race'),
        'citizen' => $request->input('citizen'),
        'phone' => $request->input('phone'),
        'address' => $request->input('address'),
        'email' => $request->input('email')
      ]);
    }

    public function update($profile_id) {

      $update;
    }
}
