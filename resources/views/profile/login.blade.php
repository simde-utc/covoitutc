@extends('layout')

@section('content')

<?php if(isset($_POST['email']) and $_POST['email'] != "") {
    echo "connexion avec succès";
}
?>

<div class="content text-center">
    <h2>Connexion</h2>
    <form action="verifyemail" method="post">
        {{ csrf_field() }}
        <label for="email">Email</label>
        <input type="text" name="email" id="email">

        <button type="submit" class="btn btn-primary">Connexion</button>
    </form>
</div>

@endsection