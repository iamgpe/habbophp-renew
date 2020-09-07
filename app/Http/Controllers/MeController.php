<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\UserController;

class MeController extends Controller {
	
	public function show()
    {
        return view('me', ['config' => ConfigController::getConfig(), 'user' => UserController::getUser()]);
    }
}