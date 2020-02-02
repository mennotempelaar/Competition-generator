@extends('layouts.master')

@section('content')
    <div class="container">
        @include('pages.competition.partials.nav')
        <h1>Competitie toevoegen</h1>
        <form action="{{ route('competitions.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="name">Competitie naam</label>
                <input type="text" name="name" class="form-control" id="name">
            </div>

            <button type="submit" class="btn btn-primary">voeg toe</button>
        </form>
    </div>
@endsection
