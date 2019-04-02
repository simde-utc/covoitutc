@extends('layout')

@section('content')

<?php
    echo $rides->all()[0]->id_ride;
?>

@endsection