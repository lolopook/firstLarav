{{-- show.blade.php --}}

@extends("layouts.app")

@section("content")
    <a href={{ route("cars.index") }}> Retour</a>
    <h1> {{ $car->brand }} {{ $car->type }} </h1>
@endsection