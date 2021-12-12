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

            if (User::where('email', $request->get('email'))->exists()) {
                redirect(route('user.register'));
            }

            $field_activity = implode(", ", $request->get('work_activity_tags'));
            $skills_tag = implode(", ", $request->get('skills_tags'));

            $user = User::create([
                'name' => $request->get('firstname'),
                'surname' => $request->get('surname'),
                'field_activity' => $field_activity,
                'skills_tag' => $skills_tag,
                'country' => $request->get('country'),
                'birthdate' => $request->get('birthdate'),
                'instagram' => $request->get('instagram'),
                'telegram' => $request->get('telegram'),
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
