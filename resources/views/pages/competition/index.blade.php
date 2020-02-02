@extends('layouts.master')

@section('content')
    <div class="container">
        @include('pages.competition.partials.nav')
        <h1>Competities</h1>

        <div class="list-group">
            @foreach ($competitions as $item)
            <a class="list-group-item list-group-item-action" href="#">
                {{ $item->name }}
            </a>
            @endforeach
        </div>
    </div>
@endsection
