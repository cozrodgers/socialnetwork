<?php
namespace App\Http\Controllers;
use App\User;
use Symfony\Component\HttpFoundation\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller{

    public function postSignUp(Request $request)
    {
        $email = $request['email'];
        $first_name = $request['first_name'];
        $last_name = $request['last_name'];
        $password = bcrypt($request['password']);

        $user = new User();
        $user->email =$email;
        $user->first_name = $first_name;
        $user->last_name = $last_name;
        $user->password = $password;

        $user->save();
        
        // AUTHENTIFICATES USER AND LOGS THEM IN ON SIGNUP
        Auth::login($user);
        //REDIRECTS USER TO DASHBOARD
        return redirect()->route('dashboard');
        
    }




    public function getDashboard()
    {
        return view('dashboard');
    }

    public function postSignIn(Request $request)
    {
       if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
return redirect()->route('dashboard');
       }

       return redirect()->back();
    }
}