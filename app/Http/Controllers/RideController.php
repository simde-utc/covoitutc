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
            DB::insert("INSERT INTO exceptionnel(depart, arrivee, jour, heure, places, chauffeur) VALUES (:departure, :destination, :daye, :hour, :nb_seats, :driver)", [
                'departure' => request('departure'),
                'destination' => request('destination'),
                'daye' => request('dateExc'),
                'hour' => request('heureExc'),
                'nb_seats' => request('nb_seats'),
                'driver' => "lol"
            ]);
        } else {
            DB::insert("INSERT INTO recurrents(depart, arrivee, places, heure, chauffeur, debut, type, jour, fin) VALUES(:depart, :arrivee, :places, :heure, :chauffeur, :debut, :type, :jour, :fin)", [
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
        $query = DB::table('exceptionnel')->get();
        return $query;
    }

    public function showAllRides() {
        //$rides = DB::table('exceptionnel')->get();
        $rides = DB::select('SELECT * FROM Exceptionnel');
        return view('rides', [
            'rides' => $rides
        ]);
    }

    public function getExceptionnelByDate($jour) {
        $rides = DB::select('SELECT * FROM Exceptionnel WHERE jour = :jour', [':jour' => $jour]);
        
        return $rides;
    }

    public function showRides() {
        $depart = request('depart');
        $arrivee = request('arrivee');

        $rides = RideController::getExceptionnelByDate(request('date'));
        return view('results', [
            'depart' => $depart,
            'arrivee' => $arrivee,
            'date' => request('date'),
            'heure' => request('heure'),
            'rides' => $rides
        ]);
    }
}
