<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     * 
     * 
     */
   
     public function create(): View
    {
        return view('auth.register');
        return view ('admin.useredit');
    }


    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            //'Age' =>['required'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'tenth'=>['integer'],
            'twelvth'=>['number'],
            'grad'=>['string'],
        ]);

        $user = User::create([
            'name' => $request->name,
            //'Age'=>$request->Age,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'tenth'=>$request->tenth,
            'twelvth'=>$request->twelvth,
            'grad'=>$request->grad,
        ]);

        $user->assignRole('user');
        event(new Registered($user));

        Auth::login($user);

        return redirect('/dashboard')->with('status','User Created Successfully');
    }
}
