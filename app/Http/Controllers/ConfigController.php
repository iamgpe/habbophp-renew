<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ConfigController extends Controller
{
    
    public static function getConfig()
    {
		$query = DB::table('habbophp_config')->get();
		$config = (object) null;
		
		foreach($query as $cnf){
			$str = $cnf->name;
			$config->$str = $cnf->value;
		}
		
		switch($config->emulateur){
			
			case "arcturus":
			$qu2 = DB::table('users')->where('online', '1')->count('online');
			$config->users_online = $qu2;
			break;
			
			/* case "plusemu":
			echo 'en cours...';
			break; */
			
		}
		
		$config->checkMaintenance = self::checkMaintenance();
		
        return $config;
    }
		public static function checkMaintenance() {
			
			$query = DB::table('habbophp_config')->where('name', 'maintenance')->first();
			if($query->value == "true"){
				return true;
			} else {
				return false;
			}
			
		}

	public static function setValue($name, $value)
	{
		$query = DB::table('habbophp_config')->where('name', $name)->update(['value' => $value]);
	}
}