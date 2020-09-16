<?php

namespace App\Http\ViewsComposer;

use Illuminate\Contracts\View\View;
use App\User;
use App\Http\Controllers\ConfigController;

class UserComposer {

    public $user;

    public function __construct(User $user) {
        $this->user = $user;
    }

    public function compose(View $view) {
        $view->with(['user' => auth()->user(), 'config' => ConfigController::getConfig()]);
    }

}