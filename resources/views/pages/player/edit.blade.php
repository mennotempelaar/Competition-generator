@extends('layouts.master')

@section('content')
    <div class="container">
        @include('pages.player.partials.nav')
        <h1>Speler wijzigen {{ $player->name }}</h1>
        <form action="{{ route('players.update', ['player' => $player]) }}" method="post">
            @csrf
            @method('PATCH')

            <div class="form-group">
                <label for="nttb_number">NTTB Lid nummer</label>
                <input type="text" name="nttb_number" class="form-control" maxlength="10" id="nttb_number" value="{{ $player->nttb_number }}">
            </div>

            <div class="form-group">
                <label for="name">Naam van de speler</label>
                <input type="text" name="name" class="form-control" id="name" value="{{ $player->name }}">
            </div>

            <button type="submit" class="btn btn-primary">voeg toe</button>

        </form>
    </div>
@stop
