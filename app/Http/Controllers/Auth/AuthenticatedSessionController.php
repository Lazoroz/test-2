<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use PhpParser\Node\Stmt\ElseIf_;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(Request $request): RedirectResponse
    {
        // $request->authenticate();

       $cred = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($cred)) {

            $request->session()->regenerate();

            if (Auth::user()->role == '0') {
                // return redirect()->intended(RouteServiceProvider::MENTOR);
                return redirect('mentor');
            } elseif (Auth::user()->role == '1') {
                return redirect()->intended(RouteServiceProvider::HOME);
            }      
        }

        return back()->withErrors([
            'email' => 'De inloggegevens komen niet overeen met onze gegevens.',
        ])->onlyInput('email');   
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('login');
    }
}
