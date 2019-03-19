<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RideController extends Controller
{
    public function store() {
        $query = DB::table('users')->get();
        $test = request('depart');
        DB::insert("INSERT INTO rides(departure, destination, day, hour, nb_seats) VALUES (:destination, :departure, :day, :hour, :nb_seats, :driver)", [
            'departure' => request('depart'),
            'destination' => request('destination'),
            'day' => request('date'),
            'hour' => request('time'),
            'nb_seats' => request('nb_place'),
            'driver' => "dummytest"

        ]);
        $query = DB::table('users')->get();
        return view('covoit', [
            'req' => $query
        ]);
    }
}
