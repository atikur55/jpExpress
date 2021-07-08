<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
class LoginController extends Controller
{
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

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected function redirectTo()
    {
        if (Auth::user()->user_type == 'admin' || 'user')
        {
            return 'dashboard';


        }
        else
        {
            return '/';

        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }



    protected function credentials(Request $request)
    {
        $credentials = $request->only($this->username(), 'password');
        $credentials['isban'] = 0;

        return $credentials;
    }

    protected function sendFailedLoginResponse(Request $request)
    {


        $this->validate($request, [

            'email' => 'required',
            'password' => 'required',
        ]);

        $email = $request->input('email');
        $u_email = User::where('email')->get();
        $errors = [$this->username() => trans('auth.failed')];

        // Load user from database
        $user = User::where($this->username(), $request->{$this->username()})->first();

        // Check if user was successfully loaded, that the password matches
        // and active is not 0. If so, override the default error message.


        if ($request->expectsJson()) {
            return response()->json($message, 422);
        }

        if ( $u_email !=  $email) {
            $message  = [$this->username() => 'You are not a registered user or Your password dont match.Try again later.'];

            if ($user && \Hash::check($request->password, $user->password) && $user->isban != 0) {
            $message  = [$this->username() => 'Your account has been banned.Please contact to the Admin.'];

            }
        }





        return redirect()->back()
            ->withInput($request->only($this->username(), 'remember'))
            ->withErrors($message);
    }


}
