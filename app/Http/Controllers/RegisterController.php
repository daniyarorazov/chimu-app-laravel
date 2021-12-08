<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function save(Request $request) {

        try {
            if (Auth::check()) {
                return redirect()->to(route('user.home'));
            }

            // $validateFields = $request->validate();

            $user = User::create([
                'name' => $request->get('firstname'),
                'email' => $request->get('email'),
                'password' => $request->get('pass'),

            ]);

            if($user) {
                Auth::login($user);
                return redirect()->to(route('user.home'));
            } else {
                return redirect()->to(route('user.home'));
            }

            return redirect()->to(route('user.login'))->withErrors([
                'formError' => "Произошла ошибка"
            ]);

        } catch (Exception $e) {
            return $e;
        }
    }
}
