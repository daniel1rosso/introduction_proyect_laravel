<?php

namespace App\Http\Controllers;

use App\Http\Requests\SavedUser;
use App\Models\Rol;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Events\MessageUser;

class UsersController extends Controller
{
    public $users_systems;
    public $user;

    public function __construct()
    {
        $this->middleware('auth')->except('index','getUser','register');
        $this->middleware('roles')->except('index','getUser','register');
    }

    public function index(){
        $users_systems = User::with('rol')->get();
        
        return view('users')->with(compact('users_systems'));
    }

    public function getUser(User $us){
        $user = User::findOrFail($us->id);

        return view('users\user', ['user' => $user])->with('status', 'Los usuarios de nuestro sistema');
    }
    
    public function new(){
        $user = new User();
        $roles = Rol::all();

        return view('users\new-user', ['user' => $user, 'roles' => $roles]);
    }

    public function newUser(SavedUser $request){
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'rol_id' => $request->rol_id,
            'password' => Hash::make($request->password, [
                'memory' => 1024,
                'time' => 2
            ]),
        ]);
        
        return redirect()->route('users')->with('status', 'El usuario fue registrado con exito');
    }

    public function edit(User $us){
        $user = User::find($us->id);
        $roles = Rol::all();

        $this->authorize($user);

        return view('users\update-user')->with(compact('user','roles'));
    }
    
    public function update(User $user, SavedUser $request){
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'rol_id' => $request->rol_id,
            'password' => Hash::make($request->password, [
                'memory' => 1024,
                'time' => 2
            ]),
        ]);
        
        $this->authorize($user);

        return redirect()->route('users', ['user' => $user])->with('status', 'El usuario fue actualizado con exito');
    }
        
    public function destroy(User $user){
        $user->delete();
        $users_systems = User::all();

        $this->authorize($user);

        return redirect()->route('users', ['users_systems' => $users_systems])->with('status', 'El usuario fue eliminado con exito');
    }

    
    public function register(){
        $user = new User();
        $roles = Rol::all();

        return view('auth\register')->with(compact('roles', 'user'));
    }

    public function user_event(){
        event(new MessageUser("HOLA BRO"));
    }
    
}
