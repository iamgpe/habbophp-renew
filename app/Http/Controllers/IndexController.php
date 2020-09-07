<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class IndexController extends Controller {
	
	public function show()
    {
		$config = ConfigController::getConfig();
        return view('index', ['config' => $config]);
    }
	
	public function login(Request $request)
	{ 
		$config = ConfigController::getConfig();
		$credentials = $request->only('username', 'password');
		$user = UserController::getUser();
		if(Auth::attempt($credentials)){
			if($config->checkMaintenance != true){
			return redirect()->route('me');
			} else {
				
				if($user->rank < 3){
					return redirect()->route('maintenanceinvalid');
				} else {
					return redirect()->route('me');
				}
			}
		} else {
			return redirect()->route('idxinvalid');
		}
	}
	
	public function logout()
	{
	
		Auth::logout();
		
	}
}