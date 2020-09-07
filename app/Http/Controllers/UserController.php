<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    
    public static function getUser()
    {
		$colonne = array("id", "username");
		$query = DB::table('users')->where('id', Auth::id())->get();
		$user = (object) null;
		foreach($query as $k){
			$user->id = $k->id;
			$user->username = $k->username;
			$user->password = $k->password;
			$user->credits = $k->credits;
			$user->motto = $k->motto;
			$user->last_online = $k->last_online;
			$user->look = $k->look;
			$user->rank = $k->rank;
		}
		foreach($query as $cnf){
			$user->username = $cnf->username;
		}
		
		return $user;
    }

}