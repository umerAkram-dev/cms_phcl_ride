<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    public function index()
    {
        return view('admin.change_password.index');
    }
    public function ChangePassword(Request $request)
    {
        $user =User::where('email',$request->email)->first();
        $user->password= Hash::make($request->new_password) ;
        $user->save();
        return view('admin.change_password.index');
    }
}
