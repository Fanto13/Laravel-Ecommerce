<?php

namespace App\Http\Controllers;
use App\User;
use App\Purchase;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use Symfony\Component\HttpKernel\Log\Logger;


class SignupController extends Controller
{
    
    public function index(){

        return view('signup');
    }

    public function store(Request $req){

        // robe


    }





    // public function signup(Request $request){
    // $validator = Validator::make($request->all(), [
    //             'name' => 'required|string|max:255',
    //             'surname' => 'required|string|max:255',
    //             'email' => 'required|string|email|max:255|unique:users',
    //             'password' => 'required|string|min:8',
    //             'birth_date' => 'required|date|max:255',
    //             'sex' => 'required|string|min:1|max:1',
    //             // 'IsAdmin' => ->required|bool|min:1|max:1']
    //             ]);
    //         // array(
    //         //     'first_name.required' => 'Inserire il nome',
    //         //     'last_name.required' => 'Inserire il cognome',
    //         //     'email.required' => 'Inserire il proprio indirizzo email',
    //         //     'password.required' => 'Scegliere una password',
    //         //     'birth_date.required' => 'inserisci la data di nascita',
    //         //     'sex.required' => 'inserisci il genere',
    //         //     'email.email' => 'L\'indirizzo specificato deve essere un indirizzo email valido.',
    //         //     'email.unique' => 'Esiste già un utente con questo indirizzo email!',
     
    //         //     'password.min' => 'La password scelta deve essere lunga almeno otto caratteri.',
    //         // )
           
    //         //  if($validator->fails()){
    //         //     return redirect('signup')->with('message', $validator->messages()->first());
    //         //  }
    //         // $request = $request->all();
    //         $user = new User();
    //         $user->name =$request->name;
    //         $user->surname =$request->surname;
    //         $user->email =$request->email;
    //         $user->password =Hash::make($request->password);
    //         $user->birth_date =$request->birth_date;
    //         $user->sex =$request->sex;
    //         if(!$user->save()){
    //             return Redirect::to('signup')->with('message|Problema in fase di iscrizione: riprovare.');
    //         }
         
           

     //   }
}
