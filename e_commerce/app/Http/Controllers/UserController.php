<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //

    function registeration()
    {
        return view('user.register');

    }

    function login()
    {
        return view('user.login');
    }

    function userHome()
    {
        return view('user.home');
    }

    function adminHome()
    {
        return view('admin.adminPanel');
    }

    function registerForm(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:5',
        ]);
        $input = $request->except('_method','_token');
        $input['name']= $request->name;
        $input['email']= $request->email;
        $input['password']= $request->password;
        User::create($input);
        return redirect()->route('login');
    }

    function loginForm(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password' => 'required|min:5',
        ]);
        $user=User::where('email','=',$request->email)->first();

        if($user){
            if($user->password==$request->password){
                Auth::login($user);
                if($user->userType == 'admin'){
                    return redirect()->route('adminHome');
                }
                return redirect()->route('userHome');
            }
            else{
                return back()->with('fail','Your password does not match.');
            }
        }
        else{
            return back()->with('fail','You should register first.');
        }
    }

    public function view()
    {
        //
        $users=User::get();
        return view('user.view',compact('users'));
    }

    public function destroy(string $id)
    {
        //
        User::where('id',$id)->first()->delete();
        return redirect()->route('User.view');
    }

    public function profile()
    {
        $user = Auth::user();
        if ($user) {
          return view('user.profile',compact('user'));
        } else {
            return redirect('login');
        }

    }

    public function userOrders()
    {
        $user = Auth::user();
        if ($user) {
          return view('user.userorders',compact('user'));
        }
    }
    function logout()
    {
        $user = Auth::user();
        if($user){
            User::where('id',$user->id)->first()->delete();
        }
        return redirect()->route('login');

    }

}
