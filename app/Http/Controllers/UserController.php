<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function register()
    {
        return view('user/register');
    }

    public function create(Request $request)
    {
        $formFields = $request->validate([
            'username' => 'required|min:3',
            'email' => 'required|email',
            'password' => 'required|min:6|confirmed',
        ]);

        $formFields['name'] = $request->username;
        $formFields['password'] = bcrypt($request->password);
        $user = User::create($formFields);
        auth()->login($user);

        flash()->success('User registration successful');
        return redirect('/');
    }

    public function login()
    {
        return view('user/login');
    }

    public function authenticate(Request $request)
    {
        $formFields = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(auth()->attempt($formFields)) {
            $request->session()->regenerate();

            flash()->success('Login successful');
            return redirect('/');
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function logout()
    {
        auth()->logout();
        session()->invalidate();
        session()->regenerateToken();

        flash()->success('Logout successful');
        return redirect('/');        
    }

    public function jobs()
    {
        $jobs = DB::table('listings')->where('user_id', auth()->id())->paginate(10);
        // dd($jobs);
        return view('user/jobs', ['jobs' => $jobs]);
    }
}
