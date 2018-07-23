<?php

namespace App\Http\Controllers\Auth;


//use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Validator;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class LoginController extends Controller
{

    public function showLoginForm()
    {
        return view('auth.login');
    }   
    /*
    public function login(Request $request)
    {
       $credentials = $this->validate(request(), [
        $this->username() => 'required|string',
        'password' => 'required|string',
       ]);
 
       if (Auth::attempt($credentials))
        {
            return redirect()->route('dashboard');
        }

        return back()
        ->witherrors([ $this->username() => trans('auth.failed')])
        ->withInput(request([ $this->username()]));

    }
    */

     public function login(Request $request)
    {
       $credentials = $this->validate(request(), [
        $this->username() => 'required|string',
        'password' => 'required|string',
       ]);
 
       if (Auth::attempt($credentials))
        {
            if(Auth::check() && Auth::user()->id_perfil==1)
           // if($credentials()->id_perfil==1)
            {
                return redirect()->route('cliente.index');
            }else{
                return redirect()->route('mantenedor.index');
            }
           
            
        }

        return back()
        ->witherrors([ $this->username() => trans('auth.failed')])
        ->withInput(request([ $this->username()]));

    }

    public function logout()
    {
        Auth::logout();

        return redirect('/login');
    }


    public function username()
    {
        return 'name';
    }
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
    
    //use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //protected $redirectTo = '/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }*/
}
