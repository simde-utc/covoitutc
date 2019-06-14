@extends('layout')

@section('content')

<div class="rides text-center">
    <h2>trajeeeets</h2>
    <ul>
        <?php foreach($rides as $ride) {
        ?><li>
        <?php
            echo $ride->jour;
        ?>
        </li>
        <?php } ?>
    </ul>
</div>

<?php
    echo $rides[0]->id;
?>

@endsection