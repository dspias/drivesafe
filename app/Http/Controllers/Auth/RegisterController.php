<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

use App\Notifications\NewUser;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:191'],
            'mobile_number' => ['required', 'string', 'max:191'],
            'vehicle_owner_name' => ['string', 'max:191'],
            'vehicle_owner_mobile_number' => ['string', 'max:191'],
            'email' => ['required', 'string', 'email', 'max:191', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

        if($data['vehicle_owner_name'] && $data['vehicle_owner_mobile_number']){

            return User::create([
                'name' => $data['name'],
                'mobile_number' => $data['mobile_number'],
                'vehicle_owner_name' => $data['vehicle_owner_name'],
                'vehicle_owner_mobile_number' => $data['vehicle_owner_mobile_number'],
                'plate_no' => $this->generateRandomString('abc123'),
                'point' => 1000,
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
            ]);

        }


        return User::create([
            'name' => $data['name'],
            'mobile_number' => $data['mobile_number'],
            'plate_no' => $this->generateRandomString('abc123'),
            'point' => 1000,
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        $admin = User::where('admin', 1)->first();
        if ($admin) {
            $admin->notify(new NewUser($user));
        }

        return $user;
    }

    function generateRandomString($characters) {
        $length = 6;
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
        // return bcrypt($randomString);
    } // close random function


}
