<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Validator;
use Hash;
use Auth;


class AuthController extends Controller
{
    public function register(){
        return view('Auth.register');
    }
    public function registerSave(Request $request){
        Validator::make($request->all(), [
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ])->validate();
        User::create([
            'nom' =>$request->nom,
            'prenom' =>$request->prenom,
            'email' =>$request->email,
            'password'=>$request->password
        ]);

        return redirect()->route('login');
    }
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Valider les informations de login
        // $request->validate([
        //     'email' => 'required|email',
        //     'password' => 'required|string|min:8',
        // ]);

        // // Essayer de se connecter avec les informations fournies
        // if (Auth::attempt($request->only('email', 'password'))) {
        //     // Rediriger vers le tableau de bord ou une autre page
            
        //     echo 'hello user';
        //     return redirect()->intended('dashboard');
        // }

        // // Si l'authentification échoue, retourner une erreur
        // throw ValidationException::withMessages([
        //     'email' => [trans('auth.failed')],
        // ]);

        $userpass = User::where('password' , $request->password)->first();
            $useremail = User::where('email' , $request->email)->first();
            if($useremail && $userpass){
                return redirect()->intended('dashboard'); 
            }else{
                echo 'error';
            }

    }
    
}


