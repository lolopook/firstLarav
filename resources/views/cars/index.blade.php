@extends('layouts.app')

@section ("content")

    <h1>Toutes nos voitures</h1>

    <ul>
        {{-- on boucle chacun des résultats de la variables $cars --}}
        @foreach ($cars as $car)
        {{-- on affiche les données d'une $car --}}
            <li>
                <a href={{ route("cars.show", $car) }}>
                    {{$car->id}} {{$car->price}} {{$car->brand}}
                </a>
            </li>
        @endforeach
    </ul>

@endsection