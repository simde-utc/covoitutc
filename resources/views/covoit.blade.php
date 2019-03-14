@extends('layout')

@section('content')
    <div class="content text-center">
        <button id="proposerTrajet" type="button" class="btn btn-primary" onclick="proposerTrajet()">Proposer un trajet</button>
        <button id="chercherTrajet" type="button" class="btn btn-primary" onclick="chercherTrajet()">Chercher un trajet</button>
        
        <div id="proposerTrajetBlock" class="houdini">
            <h2>Proposer un trajet</h2>
        </div>
        <div id="chercherTrajetBlock" class="houdini">
            <h2>Chercher un trajet</h2>
        </div>
    </div>
    

@endsection