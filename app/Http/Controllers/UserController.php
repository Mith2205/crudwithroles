<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\View\View;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;


use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.create');
    }

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
          
        return redirect()->route('admin.index')->with('status','User Created Successfully');
        
    }
}


