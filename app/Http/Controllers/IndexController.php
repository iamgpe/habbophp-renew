<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ConfigController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class IndexController extends Controller {
	
	public function show()
    {
        return view('index');
    }
	
	public function login(Request $request)
	{ 
		$credentials = $request->only('username', 'password');
		$user = Auth::user();
		$config = ConfigController::getConfig();
		if(Auth::attempt($credentials)){
			if($config->checkMaintenance != true){
			return redirect()->route('me.me');
			} else {
				
				if($user->rank < 3){
					return redirect()->route('maintenanceinvalid');
				} else {
					return redirect()->route('me.me');
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