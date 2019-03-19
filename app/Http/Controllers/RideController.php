<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RideController extends Controller
{
    public function store() {
        $query = DB::table('users')->get();
        $test = request('depart');
        DB::insert("INSERT INTO users VALUES (:email, :ent_id, :phone)", ['email' => $email, 'ent_id' => $ent_id, 'phone' => $phone]);
        return view('covoit', [
            'req' => $query
        ]);
    }
}
