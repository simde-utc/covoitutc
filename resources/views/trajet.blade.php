@extends('layout')

@section('content')
<div class="col-auto w-50 mx-auto text-left" id="content">
<?php
	$trajet = DB::select('SELECT * FROM exceptionnel WHERE id=:id', [':id' => request('id')]);
	if(isset($trajet[0])) {
		$trajet = $trajet[0];
?>
	<div class="border rounded-lg p-4">
		<div class="container">
			<div class="row">
				<div class="col">
					<h1>Trajet : <?= $trajet->depart ?> &raquo; <?= $trajet->arrivee ?></h1>
					<h2 class="m-0"><?= $trajet->jour ?><br>
					<small><?= $trajet->heure ?></small></h2>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-auto">
					<img src="generic.png" width="200" height="200">
				</div>
				<div class="col">
					<h2>Nom Prénom</h2>
					<h4>0612345678</h4>
					<h5>Voiture</h5>
				</div>
			</div>
			<div class="row">
				<div class="col text-right">
					<a href="book.php?id" class="btn btn-primary btn-lg text-right">Réserver</a>
				</div>
			</div>
		</div>
	</div>
<?php
	}else{
		echo "pas de trajet :(";
	}
?>

@endsection