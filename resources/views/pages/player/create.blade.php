@extends('layouts.master')

@section('content')
    <div class="container">
        @include('pages.player.partials.nav')
        <h1>Een speler toevoegen</h1>
        <form action="{{ route('players.store') }}" method="post">
            @csrf

            <div class="form-group">
                <label for="nttb_number">NTTB Lid nummer</label>
                <input type="text" name="nttb_number" class="form-control" maxlength="10" id="nttb_number">
            </div>

            <div class="form-group">
                <label for="name">Naam van de speler</label>
                <input type="text" name="name" class="form-control" id="name">
            </div>

            <button type="submit" class="btn btn-primary">voeg toe</button>

        </form>
    </div>
@stop
