@extends('layout')

@section('content')
    <div class="content text-center">
        <button id="proposerTrajet" type="button" class="btn btn-primary" onclick="proposerTrajet()">Proposer un trajet</button>
        <button id="chercherTrajet" type="button" class="btn btn-primary" onclick="chercherTrajet()">Chercher un trajet</button>
    </div>
    <div id="proposerTrajetBlock">
        <p> bla bla bla </p>
    </div>

@endsection