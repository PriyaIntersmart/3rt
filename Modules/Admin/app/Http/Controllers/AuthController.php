<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Crypt;

class AuthController extends Controller
{   public function showLoginForm()
    {
        if (Auth::guard('admin')->check()) {
            return redirect()->intended('/3RT-admin-portal'); // Redirect to the admin dashboard or any other authenticated page
        }

        $encryptedEmail = Cookie::get('user_email', '');
        $encryptedPassword = Cookie::get('user_password', '');
        $remember = Cookie::get('user_remember', false);

        $email = $encryptedEmail ? Crypt::decrypt($encryptedEmail) : '';
        $password = $encryptedPassword ? Crypt::decrypt($encryptedPassword) : '';

        return view('admin::auth.login', compact('email', 'password', 'remember'));
    }



    public function login(Request $request)
{
    $request->validate([
        'email' => 'required',
        'password' => 'required'
    ]);

    $credentials = $request->only('email', 'password');
    $remember = $request->filled('remember');

    if (Auth::guard('admin')->attempt($credentials, $remember)) {
        if ($remember) {
            $this->setRememberMeCookie($request->email, $request->password);
        } else {
            $this->clearRememberMeCookie();
        }

        return redirect()->intended('3RT-admin-portal');
    } else {
        return redirect()->back()->withErrors(['email' => 'Invalid credentials'])
            ->withInput($request->only('email', 'remember'));
    }
}

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login.form');
    }

    private function setRememberMeCookie($email, $password)
    {
        $encryptedEmail = encrypt($email);
        $encryptedPassword = encrypt($password);

        Cookie::queue('user_email', $encryptedEmail, 43200); // Expires in 30 days
        Cookie::queue('user_password', $encryptedPassword, 43200); // Expires in 30 days
        Cookie::queue('user_remember', true, 43200); // Expires in 30 days
    }

    private function clearRememberMeCookie()
    {
        Cookie::queue(Cookie::forget('user_email'));
        Cookie::queue(Cookie::forget('user_password'));
        Cookie::queue(Cookie::forget('user_remember'));
    }
}
