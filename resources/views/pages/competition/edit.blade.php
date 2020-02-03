@extends('layouts.master')

@section('content')
    <div class="container">
        @include('pages.competition.partials.nav')
        <h1>Wijzigen</h1>
        <h2>Competitie: {{ $competition->name }}</h2>
        <form action="{{ route('competitions.update', ['competition' => $competition]) }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="name">Competitie naam</label>
                <input type="text" name="name" class="form-control" id="name" value="{{ $competition->name }}">
            </div>

            <button type="submit" class="btn btn-primary">Aanpassen</button>
        </form>
    </div>
@endsection
