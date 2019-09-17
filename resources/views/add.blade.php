@extends('layout')

@section('content')
<div class="col-auto w-50 mx-auto text-center" id="content">
<h1>Ajouter un covoiturage</h1>
<form action="/add/ride" method="post">
	{{ csrf_field() }}
	<div class="form-group">
		<div class="row">
			<div class="col p-0">
				<label for="departure" class="my-2">Départ</label>
				<select name="departure" id="depart" class="form-control form-control-lg">
					<option value="bf">BF</option>
					<option value="pg">PG</option>
				</select>
			</div>
			<div class="col pr-0">
				<label for="destination" class="my-2">Arrivée</label>
				<select name="destination" id="arrivee" class="form-control form-control-lg">
					<option value="pg">PG</option>
					<option value="bf">BF</option>
				</select>
			</div>
		</div>
		<div class="row">
			<label for="nb_seats" class="my-2">Nombre de places</label>
			<input type="number" name="nb_seats" id="nb_places" class="form-control form-control-lg">
		</div>
	</div>
	<div class="btn-toolbar my-4" role="choix">
		<div class="btn-group mr-2 mx-auto" role="group" aria-label="First group">
			<button type="button" id="btnExceptionnel" class="btn btn-secondary" data-toggle="collapse" data-target="#exceptionnel" aria-expanded="false" aria-controls="exceptionnel">Exceptionnel</button>
			<button type="button" id="btnRecurrent" class="btn btn-secondary" data-toggle="collapse" data-target="#recurrent" aria-expanded="false" aria-controls="recurrent">Récurrent</button>
		</div>
	</div>
	<div class="form-group">
		<div class="row">
			<div class="col collapse" id="exceptionnel">
				<label for="dateExc" class="my-2">Date</label>
				<input type="date" name="dateExc" id="dateExc" class="form-control form-control-lg">
				<label for="heureExc" class="my-2">Heure</label>
				<input type="time" name="heureExc" id="heureExc" class="form-control form-control-lg">
			</div>
			<div class="col collapse" id="recurrent">
			    <label for="recurrence" class="my-2">Récurrence</label>
				<select name="recurrence" id="recurrence" class="form-control form-control-lg">
					<option value="null">Choisir récurrence</option>
					<option value="hebdo">Hebdomadaire</option>
					<option value="bi">Bihebdomadaire</option>
					<option value="quoti">Quotidien</option>
				</select>
				<div id="wrapJourSemaine" class="collapse show">
					<label for="jourSemaine" class="my-2">Jour de la semaine</label>
					<select name="jourSemaine" id="jourSemaine" class="form-control form-control-lg">
						<option value="lundi">Lundi</option>
						<option value="mardi">Mardi</option>
						<option value="mercredi">Mercredi</option>
						<option value="jeudi">Jeudi</option>
						<option value="vendredi">Vendredi</option>
						<option value="samedi">Samedi</option>
						<option value="dimanche">Dimanche</option>
					</select>
				</div>
				<label for="heure" class="my-2">Heure</label>
				<input type="time" name="heure" id="heure" class="form-control form-control-lg">
				<label for="dateDebut" class="my-2">Date de début</label>
				<input type="date" name="dateDebut" id="dateDebut" class="form-control form-control-lg">
				<label for="dateFin" class="dateFin">Date de fin</label>
				<input type="date" name="dateFin" id="dateFin" class="form-control form-control-lg">
			</div>
		</div>
	</div>
	<div class="form-group">
		<input type="submit" class="btn btn-primary btn-lg my-4" value="Proposer">
	</div>
</form>
<script type="text/javascript">
$('#btnExceptionnel').click(function() {
		if($('#recurrent').hasClass("show")){
			$('#recurrent').collapse('hide');
		}
});
$('#btnRecurrent').click(function(){
	if($('#exceptionnel').hasClass("show")){
		$('#exceptionnel').collapse('hide');
	}
});
$('#recurrence').change(function(){
	if($('#recurrence').val()=='quoti'){
		$('#wrapJourSemaine').collapse('hide');
	}
	if($('#wrapJourSemaine').hasClass('collapse') && $('#recurrence').val()!='quoti'){
		$('#wrapJourSemaine').collapse('show');
	}
});
</script>
@endsection
