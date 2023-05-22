<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Illuminate\View\View;          

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //home.topはログインしていなくても見れる
        // $this->middleware('auth');
    }

    public function index(): View
    {
        return view('home');
    }

    // トップページ
    public function top(): View
    {
        return view('top');
    }

    // 案内ページ
    public function info(): View
    {
        return view('info');
    }
}
