<?php

namespace App\Http\Controllers\Me;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller {
	
	public function show()
    {
        return view('profile');
    }
    

    public function change(Request $request)
    {
        $user = auth()->user();
        $motto = $request->input('motto');
        $email = $request->input('email');

        $user = User::find($user->id);

        $validatedData =  Validator::make($request->all(), [
            'motto' => 'max:38',
            'email' => 'required|max:255',
        ]);

        if(!$validatedData->fails()){
        $user->motto = $motto;
        $user->mail = $email;
        if(!$user->save()){
            return redirect()->route('me.profile');
        } else {
            return redirect()->route('me.profile');
        }
    } else {
        return redirect()->back()->withErrors($validatedData);
    }

    }
}