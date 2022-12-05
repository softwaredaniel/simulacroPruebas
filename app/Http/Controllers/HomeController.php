<?php

namespace App\Http\Controllers;
Use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    ///home controller  para expulsar a los usuarios a su ruta solo pasan adminstradores
    
   public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('administrador',['only'=> ['index']]);
    }


    /**
     * Show the application dashboard.
     *
     *  Contracts\Support\Renderable
     */
    public function index()
    { 
        $users = User::all();
        return view('home',compact('users'));
        
    }

   

}
