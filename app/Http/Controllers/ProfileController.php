<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function index() {
        return view('profile.index');
    }

    public function create() {
        return view('profile.create');
    }

    public function store() {
        DB::insert("INSERT INTO users VALUES (:email, :ent_id, :phone)", [
        'email' => request('email'),
        'ent_id' => request('ent_id'),
        'phone' => request('phone')
        ]);

        return view('covoit');
    }

    public function login() {
        
        //return verifyEmail(request('email'));
        return view('profile.login');
    }

    public function verifyEmail() {
        $email_list = DB::select("SELECT email FROM users");
        foreach($email_list as $var) {
            if($var->email == request('email')) {
                return true;
            }
        }

        return false;
    }
}
