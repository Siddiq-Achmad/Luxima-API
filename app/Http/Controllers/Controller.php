<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;


    // public function root()
    // {
    //     return view('dashboard');
    // }

    public function index(Request $request)
    {
        if ($request->path() == '/') {
            if (Auth::check()) {
                return view('dashboard');
            } else {
                return view('auth.login');
            }
        } elseif (view()->exists($request->path())) {
            return view($request->path());
        } else {
            abort(404);
        }

        // return view('index');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }
}
