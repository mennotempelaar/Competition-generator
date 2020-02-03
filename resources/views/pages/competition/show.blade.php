@extends('layouts.master')

@section('content')
    <div class="container">
        @include('pages.competition.partials.nav')
        <h1>Competitie {{ $competition->name }}</h1>

    </div>
@endsection
