<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Controllers\ConfigController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
	
	protected $config;
	
	public function __construct()
	{
		$this->config = ConfigController::getConfig();
		if(Auth::check()){
			view()->share(['config' => $this->config, 'user' => auth()->user()]);
		} else {
		view()->share(['config' => $this->config]);
		}
	}
}
