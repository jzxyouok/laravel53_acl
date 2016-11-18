<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function getSignUpPage()
    {
        return view('auth.signup');
    }

    public function getSignInPage()
    {
        return view('auth.signin');
    }

    public function postSignUp(Request $request)
    {
        $this->validate($request, [
            'first_name'   => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'password' => 'required|min:6|max:60',

        ], [
            'required' => '必填欄位',
            'min'      => '至少要 :min 個字',
            'max'      => '最多只能 :max 個字',
        ]);
        //註冊
        $user = new User();
        $user->first_name = $request['first_name'];
        $user->last_name = $request['last_name'];
        $user->email = $request['email'];
        $user->password = bcrypt($request['password']);
        $user->save();
        //預設為 user 身份別
        $user->roles()->attach(Role::where('name', 'User')->first());
        Auth::login($user);
        return redirect()->route('main');
    }

    public function postSignIn(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required',
            'password' => 'required',
        ], [
            'required' => '必填欄位',
            'min'      => '至少要 :min 個字',
            'max'      => '最多只能 :max 個字',
        ]);

        //登入檢查 , true 表記住，remember_token 欄位來儲存「記住我」的標記
         if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']], true)   ) {
            return redirect()->route('main');
        }
        return redirect()->back();
    }

    public function getLogout()
    {
        Auth::logout();
        return redirect()->route('main');
    }
}
