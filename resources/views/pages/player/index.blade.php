@extends('layouts.master')

@section('content')
    <div class="container">
        @include('pages.player.partials.nav')
        <h1>Spelers</h1>

        <div class="list-group">
            @foreach ($players as $player)
                <a class="list-group-item list-group-item-action"
                   href="{{ route('players.show', ['player' => $player]) }}">
                    {{ $player->name }}
                </a>
            @endforeach
        </div>
    </div>
@endsection
