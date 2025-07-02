<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;



class AuthController extends Controller
{
    function login(){
        return view('scripts.login');
    }

    public function loginPost(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended(route('accueil'));
        }
        return redirect(route('login'))->with('error', 'Login details are not valid');
    }

    function registration(){
        return view('scripts.registration');
    }
    function registrationPost(Request $R) {
        $R->validate([
            'name'=>'required',
            'email'=>'required|email|unique:accounts',
            'password'=>'required'
        ]);
        $existingUser = User::where('email', $R->email)->first();

    if ($existingUser) {
        // Si l'e-mail est déjà utilisé, redirigez l'utilisateur vers la page d'inscription avec un message d'erreur
        return redirect(route('registration'))->with('error', "Ce courriel est déjà utilisé. Veuillez utiliser un nouveau courriel, s'il vous plaît");
    }
        $data['name']=$R->name;
        $data['email']=$R->email;
        $data['password']=Hash::make($R->password);
        $user = User::create($data);
        if(!$user){
            return redirect(route('registration'))->with('error','registration failed, try again');
        }
        return redirect(route('login'))->with('success','registration success, login to access the app');
    }
    function logout(){
        Session::flush();
        Auth::logout();
        return redirect(route('login'));
    }
}
