<?php

namespace App\Http\Controllers\Me;

use App\Models\News;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class MeController extends Controller {

	public function show()
    {
        $news = News::all();

        return view('me', ["news" => $news]);
    }
}
