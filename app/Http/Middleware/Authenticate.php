<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Route;

class Authenticate extends Middleware
{
    
    /**
     * @var string
     */
    protected $user_route  = 'user.login';


    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     */
    protected function redirectTo($request):string | null
    {
        // ルーティングに応じて未ログイン時のリダイレクト先を振り分ける
        if (! $request->expectsJson()) {
            if (Route::is('user.*')) {
                return route($this->user_route);
            }
        }
    }
}
