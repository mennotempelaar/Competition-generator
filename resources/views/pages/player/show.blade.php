@extends('layouts.master')

@section('content')
    <div class="container">
        @include('pages.player.partials.nav')
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Speler {{ $player->name }}</h5>

                @if ($player->nttb_number)
                    <h6 class="card-subtitle mb-2 text-muted">{{ $player->nttb_number }}</h6>
                @endif

                <a class="btn btn-primary" href="{{ route('players.edit', ['player' => $player]) }}">
                    Speler wijzigen
                </a>
                <a class="btn btn-danger" href="{{ route('players.destroy', ['player' => $player]) }}">
                    Speler verwijderen
                </a>
            </div>
        </div>
    </div>
@stop
