<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Hash;
use Symfony\Component\HttpKernel\Log\Logger;

use Log;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() //fare per gli altri controller
    {
       
        $user = User::orderBy('name')->get();
        
         return view('user.index', compact('user'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    // viene gestita la procedura di registrazione
    // dopo aver cliccato su "Registrati"
    
// protected function signup(Request $request){
    
   
// }


    public function users()
    {
        return view('user', ['user' => User::all()]);
    }

    public function __construct()
    {
        //
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
   {
       //
   }

  
    /**
     * Display the specified resource.
     *fa vedere un elemento della tabella
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $utenti = User::find($id);, compact('utenti')

        return view('user.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     
     */
    public function edit($id)
    {
       // $users = User::orderBy('name')->get();
        $user = User::where('id', $id)->get();
        return view('user.edit', compact('user'));
    }
    public function register()
    {
        return view('auth/register');
    }

    public function registerGuest(Request $req)
    {
     
            $validData = $req->validate([
                'name' => ['required', 'string', 'max:255'],
                'surname' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8'],
                'birth_date' => ['required', 'date', 'max:255'],
                'sex' => ['required', 'string', 'min:1', 'max:1'],
            ]);
        
    
             User::create([
                'name' =>   $validData ['name'],
                'surname' =>   $validData ['surname'],
                'email' =>   $validData ['email'],
                'password' => Hash::make(  $validData ['password']),
                'birth_date' =>   $validData ['birth_date'],
                'sex' =>   $validData ['sex'],
                'IsAdmin' => 0
            ]);
                
            return view('home');
           
        }


        public function registerAdmin(Request $req)
        {
         
                $validData = $req->validate([
                    'name' => ['required', 'string', 'max:255'],
                    'surname' => ['required', 'string', 'max:255'],
                    'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                    'password' => ['required', 'string', 'min:8'],
                    'birth_date' => ['required', 'date', 'max:255'],
                    'sex' => ['required', 'string', 'min:1', 'max:1'],
                    'IsAdmin' => ['required', 'bool', 'min:1', 'max:1']
                ]);
            
        
                User::create([
                    'name' => $req['name'],
                    'surname' => $req['surname'],
                    'email' => $req['email'],
                    'password' => Hash::make($req['password']),
                    'birth_date' => $req['birth_date'],
                    'sex' => $req['sex'],
                    'IsAdmin' => $req['IsAdmin']
                ]);
                    
                    
                return view('home');
               
            }
        
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $input = $request->all();

        $user = User::findOrFail($id);
        $user->name = $input["name"];
        $user->surname = $input["surname"];
        $user->email = $input["email"];
        $user->birth_date = $input["birth_date"];
        $user->sex = $input["sex"];
        $user->IsAdmin = $input["IsAdmin"];
        $user->save();

        $request->session()->flash('Profile Successfully Updated','Success');
        $user_id = $user->id;
        return redirect()->route('user.edit', $id)->with('message', "Aggiornato correttamente!");
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=User::find($id);
        $user->delete();
        return json_encode(['response' => 'Utente cancellato correttamente!']);
        //return redirect('user')->with('success_message', '');
    }
}
