<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\LoginRequestSuperAdmin;
use App\Http\Requests\LoginRequestSuperAdmin as RequestsLoginRequestSuperAdmin;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class SuperAdminController extends Controller
{
    public function create(): View
    {
        return view('auth.super_admin_login');
    }

    public function store(RequestsLoginRequestSuperAdmin $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::SUPERADMIN);
    }
}
