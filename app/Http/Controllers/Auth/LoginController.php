<?php

namespace App\Http\Controllers\Auth;
Use App\Models\User;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    |Este controlador maneja la autenticación de los usuarios para la aplicación y
    | redirigirlos a su pantalla de inicio. El controlador usa un rasgo
    | para proporcionar convenientemente su funcionalidad a sus aplicaciones.
    |
    */
    
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    

    /**
     * Create a new controller instance.
     *
     * @return void
     */
  
      
    
      public function authenticate(Request $request)
       {
      
          $credentials = $request->validate([
           'num_documento' => ['required'],
            'password' => ['required'],
          ]);
 
         if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('home');
         }
 
            return back()->withErrors([
            'num_documento' => 'El numero de documento o la clave estan incorrectos',
            ])->onlyInput('num_documento');
      }


    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

  }  
