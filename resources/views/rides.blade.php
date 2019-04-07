@extends('layout')

@section('content')

<div class="rides text-center">
    <h2>trajeeeets</h2>
    <ul>
        <?php foreach($rides->all() as $ride) {
        ?><li>
        <?php
            echo $rides->all()[0]->departure;
        ?>
        </li>
        <?php } ?>
    </ul>
</div>

<?php
    echo $rides->all()[0]->id_ride;
?>

@endsection