@extends('layout')

@section('content')
@if (session('status'))
    <script>alert("Ride added")</script>
@endif
<div class="col-auto m-auto text-center" id="content">
<a href="add" class="btn btn-primary btn-lg align-middle my-3" role="button">Proposer un trajet</a><br>
<a href="search" class="btn btn-primary btn-lg align-middle my-3" role="button">Rechercher un trajet</a>


@endsection
