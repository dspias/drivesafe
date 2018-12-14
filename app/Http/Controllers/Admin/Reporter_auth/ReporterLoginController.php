<?php

namespace App\Http\Controllers\Admin\Reporter_auth;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReporterLoginController extends Controller
{
   protected $redirectTo = 'reporter/dashboard';
   
    public function __construct()
    {
        $this->middleware('guest:reporter')->except('logout');
        
    }

   public function login(Request $request){
    //data validation
    // dd($request);
    $this->validate($request, [
        'email'     => 'required|email',
        'password'  => 'required|min:6'
    ]);
    // return $request;
     if (Auth::guard('reporter')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            return redirect()->route('reporter.dashboard.index');
     } else {
        return redirect()->back()->withInput( $request->only('email', 'remember'));
     }
   }
   /**
     * Show the application's login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        return view('reporter.auth.login');
    }
    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        Auth::guard('reporter')->logout();
        $request->session()->flush();
        return redirect()->guest(route('reporter.index'));
    }
}
