@extends('layout')

@section('content')

    <div class="content text-center">
        <h2>Créer son profile</h2>

        <form action="" method="post">
            {{ csrf_field() }}
            <div>
                <label for="email">Email</label>
                <input type="text" name="email" id="email">
            </div>
            <div>
                <label for="ent_id">ID ENT</label>
                <input type="text" name="ent_id" id="ent_id">
            </div>
            <div>
                <label for="phone">Téléphone</label>
                <input type="number" name="phone" id="phone">
            </div>
            <button type="submit" class="btn btn-primary">Valider</button>
        </form>
    </div>

@endsection