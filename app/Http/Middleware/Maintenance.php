<?php
namespace App\Http\Middleware;
use App\Http\Controllers\ConfigController;
use Illuminate\Support\Facades\Auth;

use Closure;

class Maintenance
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $config = ConfigController::getConfig();
        if ($config->checkMaintenance)
        {
            if (Auth::check())
            {
                $user = auth()->user();
                if ($user->rank < 3)
                {
                    return redirect()->route('maintenance');
                }

            } else {
            	return redirect()->route('maintenance');
            }
        }
        return $next($request);
    }
}

