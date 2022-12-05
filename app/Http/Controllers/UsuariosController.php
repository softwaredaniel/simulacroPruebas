<?php

namespace App\Http\Controllers;
Use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function index(){
        
            $users = User::all();
            return view('app.usuarios',compact('users'));
    }

    public function editar($id){
        
        
    }
    public function update($id){
        
        
    }

    public function destroy($id){
        
        $Eliminar = User::find($id);
        $Eliminar->delete();
        return back()->withInput();
    }

    public function __construct()
    {
        $this->middleware('auth');
    }


}
