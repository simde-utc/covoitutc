<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Covoit'UT</title>
	<link rel="icon" href="inc/favicon.ico"/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container-fluid p-0">
		<div class="row border-bottom" id="header">
			<div class="col-10">
				<h1 class="display-3"><a href="index.php" id="title">Covoit'UT<img src="logo.png" width="90" height="90" /></a></h1>
			</div>
			<div class="col text-center">
				<a href="login.php" class="btn btn-warning btn-lg">Connexion</a>
			</div>
		</div>
		<div class="row">
    
        @yield("content")

		</div>
		</div>
		<div class="row text-center mt-2 py-2 border-top">
			<div class="col">
				<div id="footer" class="text-secondary">
					<a href="">Mentions légales</a>
					<div hidden>Icons made by <a href="https://www.freepik.com/" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>