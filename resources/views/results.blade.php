@extends('layout')

@section('content')
<div class="col-auto w-50 mx-auto text-left results" id="content">
<h1>Trajet : <?php echo $depart; ?> &raquo; <?php echo $arrivee ?></h1>
<h2><?= $date ?><br>
<small><?= $heure ?></small></h2>
<hr>
<?php
if(isset($_POST['depart'])) { 
	
foreach($rides as $ride) {
?>
<a href="trajet.php?id=<?php echo $ride->id ?>">
<div class="result mx-auto my-2 p-2 border rounded-lg">
	<div class="container">
		<div class="row">
			<div class="col-auto p-0 my-auto">
				<img src="generic.png" width="80" height="80">
			</div>
			<div class="col-7 text-left my-auto">
				<h4><?php echo $ride->depart ?> &raquo; <?php echo $ride->arrivee; ?><br>
				<small class="text-muted"><?php echo $ride->chauffeur; ?></small></h4>
				<h6><?php echo $ride->places; ?> places restantes</h6>
			</div>
			<div class="col-auto p-0 m-auto">
				<h2><?php echo $ride->heure ?></h2>
			</div>
		</div>
	</div>
</div>
</a>
<?php }}
?>

@endsection

