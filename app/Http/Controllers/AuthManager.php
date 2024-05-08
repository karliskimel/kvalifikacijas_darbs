<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthManager extends Controller
{
    function login(){
        if (Auth::check()){
            return redirect(route('home')); //pievienošanās funkcija pārbauda vai ir veikta autorizācija
        }
        return view('login');
    }

    function registration(){
        if (Auth::check()){
            return redirect(route('home')); // pārbauda vai reģistrācijas autorizācija ir veikta
        }
        return view('registration');
    }

    function loginPost(Request $request){ //kad tiek veikta pievienošanās nepieciešams ievadīt tikai e-pastu un paroli
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)){
            return redirect()->intended(route('home'));
        }
        return redirect(route('login'))->width("error", "Pievienojoties kaut kas nogāja greizi");
    }
    function registrationPost(Request $request){ // pieprasītie dati priekš reģistrācijas
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);

        $data['name'] = $request->name; // tiek pārbaudīts vai tāds lietotājs ar norādītajiem datiem eksistē
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $user = User::create($data);
        if(!$user){
            return redirect(route('registration'))->width("error", "Reģistrācjia neizdevās, mēģiniet vēlreiz");
        }
        return redirect(route('login'));
    }
    function logout(){ //iziet no sava izveidotā profila
        Auth::logout();
        return redirect(route('login'));
    }
}
