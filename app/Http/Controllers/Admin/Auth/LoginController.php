<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Contracts\Auth\Guard;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::ADMIN_HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    /**
     * Guardの認証方法を指定
     */
    protected function guard(): Guard
    {
        return \Auth::guard('admin');
    }

    /**
     * ログイン画面
     */
    public function showLoginForm(): View
    {
        return view('admin.auth.login');
    }

    /**
     * ログアウト処理
     */
    public function logout(Request $request): RedirectResponse
    {
        \Auth::guard('admin')->logout();

        return $this->loggedOut($request);
    }

    /**
     * ログアウトした時のリダイレクト先
     */
    public function loggedOut(Request $request): RedirectResponse
    {
        return redirect(route('admin.login'));
    }
}
