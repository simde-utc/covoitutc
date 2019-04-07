<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RideController extends Controller
{
    public function store() {
        // Faut gérer les profils /!\
        $tmp = request('recurrence');
        if($tmp == 'null') {
            DB::insert("INSERT INTO exceptionnel(id, depart, arrivee, jour, heure, places, chauffeur) VALUES (:id, :destination, :departure, :day, :hour, :nb_seats, :driver)", [
                'id' => 10,
                'departure' => request('departure'),
                'destination' => request('destination'),
                'day' => request('dateExc'),
                'hour' => request('heureExc'),
                'nb_seats' => request('nb_seats'),
                'driver' => "lol"
            ]);
        } else {
            DB::insert("INSERT INTO recurrents(id, depart, arrivee, places, heure, chauffeur, debut, type, jour, fin) VALUES(:id, :depart, :arrivee, :places, :heure, :chauffeur, :debut, :type, :jour, :fin)", [
                'id' => 21,
                'depart' => request('departure'),
                'arrivee' => request('destination'),
                'places' => request('nb_seats'),
                'heure' => request('heure'),
                'chauffeur' => 'lol',
                'debut' => request('dateDebut'),
                'type' => request('recurrence'),
                'jour' => request('jourSemaine'),
                'fin' => request('dateFin')
            ]);
        }
        $query = DB::table('recurrents')->get();
        return $query;
    }

    public function showAllRides() {
        $rides = DB::table('rides')->get();
        return view('rides', [
            'rides' => $rides
        ]);
    }
}
