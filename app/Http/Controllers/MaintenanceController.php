<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

class MaintenanceController extends Controller
{
   public function login(Request $request)
	{ 
		$config = ConfigController::getConfig();
		$credentials = $request->only('username', 'password');
		$user = UserController::getUser();
		if(Auth::attempt($credentials)){
			return redirect()->route('me');
			} else {
				echo 'test';
			}
	}
}
