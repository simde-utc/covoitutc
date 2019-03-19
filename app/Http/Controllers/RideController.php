<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RideController extends Controller
{
    public function store() {
        $query = DB::table('users')->get();

        return view('covoit', [
            'req' => $query
        ]);
    }
}
