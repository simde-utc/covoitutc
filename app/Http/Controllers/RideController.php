<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RideController extends Controller
{
    public function store() {
        // Cette requête ne peut pas fonctionner pour l'instant car il faut un chauffeur
        // Donc il faut gérer les profils
        $query = DB::table('users')->get();
        $test = request('depart');
        DB::insert("INSERT INTO rides(departure, destination, day, hour, nb_seats, driver) VALUES (:destination, :departure, :day, :hour, :nb_seats, :driver)", [
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
