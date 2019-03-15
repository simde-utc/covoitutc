@extends('layout')

@section('content')
    <div class="content text-center">
        <button id="proposerTrajet" type="button" class="btn btn-primary" onclick="proposerTrajet()">Proposer un trajet</button>
        <button id="chercherTrajet" type="button" class="btn btn-primary" onclick="chercherTrajet()">Chercher un trajet</button>
        
        <div id="addRide" class="houdini">
            <h2>Proposer un trajet</h2>

            <form action="" method="post">
                
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <label for="depart">De</label>
                <select name="depart" id="depart">
                    <option value="compiegne">Compiègne</option>
                    <option value="paris">Paris</option>
                </select>

                <label for="destination">à</label>
                <select name="destination" id="destination">
                    <option value="paris">Paris</option>
                    <option value="compiegne">Compiègne</option>
                </select>

                <div id="rideDateBlock">
                    <label for="date">Le</label>
                    <input type="date" name="date">

                    <label for="heure">à</label>
                    <input type="time" name="time">
                </div>
                <div id="nbSeatsBlock">
                    <label for="nb_place">Nombre de places (sans te compter)</label>
                    <input type="number" name="nb_place" id="nb_place">
                </div>

                <button type="submit" class="btn btn-success">Proposer le trajet</button>
            </form>
        </div>

        <div id="searchRides" class="houdini">
            <h2>Chercher un trajet</h2>
        </div>
    </div>
    

@endsection