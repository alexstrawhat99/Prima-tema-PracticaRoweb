<?php
//controller pt login
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        if ($request->isMethod('post')) {
            $this->validate($request, [
                'email' => 'required|email',
                'password' => 'required'
            ]);

            $user = User::where('email', $request->input('email'))->first();

            if (!$user || !Hash::check($request->input('password'), $user->password)) {
                return redirect(route('login'))->withErrors([
                    'login' => 'Email or password is incorrect!'
                ])->withInput();
            }

            Auth::login($user);

            return redirect('/dashboard');
        }

        return view('auth/login');
    }
//de facut
    public function register(Request $request)
    {
        //TODO
        if ($request->isMethod('post')) {

            // login user or send activate email


            //validate request
             function validator(array $data)
            {
                Validator::make($data, [
                    'name' => 'required|string|max:255',
                    'email' => 'required|string|email|max:255|unique:users',
                    'password' => 'required|string|min:6|confirmed',
                ]);
            }

            User::create(request(['name', 'email', 'password']));

            //create user
            function create(array $data)
            {
                User::create([
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'password' => bcrypt($data['password']),
                ]);
            }
            // Get the currently authenticated user...
            $user = Auth::user();


//            Auth::register($user);

            //redirected to dashboard/login
            return redirect('/login');
        }


        //return view register
//        return 'REGISTER';
        return view('auth/register');
    }

}
