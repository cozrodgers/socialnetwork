<?php
namespace App\Http\Controllers;
use App\User;
use Symfony\Component\HttpFoundation\Request;


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
        $user->password = $password;

        $user->save();

        return redirect()->back();
        
    }

    public function postSignIn(Request $request)
    {
        
    }
}