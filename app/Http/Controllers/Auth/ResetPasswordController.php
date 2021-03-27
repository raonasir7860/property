<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use App\Models\Customer;
use App\Models\Plot;
use App\Models\Agent;
use App\Models\User;
use Toastr;
use Session;
class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
         public function reset_password(Request $request)
    {
              $this->validate(
            $request,
            [
                'email' => ['required'],
            ]
        );
              $user = User::where('email',$request->email)->first();
              if (!empty($user)) {
                return view('auth.passwords.reset',compact('user'));
              }
              else{
                $user = 'User Cannot find! Please Enter Correct Email';
                 return view('auth.passwords.email',compact('user'));
              }
    }
             public function change_password(Request $request)
    {
              $this->validate(
            $request,
            [
                'password' => ['required', 'string', 'min:8', 'confirmed'],
            ]
        );
              $user = User::where('email',$request->email)->first();
              $user ->password =  Hash::make($request->password);
              $user ->save();
          Toastr::success('message','Password Change Successfully');  
             return Redirect::to('/');
    }
    // protected $redirectTo = RouteServiceProvider::HOME;
}
