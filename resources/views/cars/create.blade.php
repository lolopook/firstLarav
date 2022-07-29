@extends('layouts.app');

@section("content")
    <h1>Mon formulaire</h1>

    <form action={{ route("cars.store") }} method="POST">
        @csrf
        <div>
            <label for="brand">Marque</label>
            <input type="text" id="brand" name="brand" value = "{{ old("brand") }}" required  /> {{-- Attention il faut les guillement si ce n'est pas le dernier argument. --}}
            @error("brand")
                Remplis mieux que ça ! {{-- on peut changer de message ici , sinon c'est dans la lang dans fr --}}
            @enderror
        </div>
        <div>
            <label for="type">Modele</label>
            <input type="text" id="type" name="type" required value="{{ old("type") }}" />
            @error("type")
                {{ $message }}
            @enderror
        </div>
        <div>
            <label for="price">Prix</label>
            <input type="number" step="0.01" id="price" name="price" required value="{{ old("price") }}" />
            @error("price")
                {{ $message }}
            @enderror
        </div>
        <div>
            <label for="weight">Poids</label>
            <input type="number" id="weight" name="weight" required value="{{ old("weight") }}" />
        </div>
        <div>
            <label for="energy">Énergie</label>
            <input type="text" id="energy" name="energy" required value= "{{ old("energy") }}" />
        </div>
        <div>
            <label for="power">Puissance</label>
            <input type="number" id="power" name="power" required value="{{ old("power") }}" />
        </div>
        <div>
            <label for="release_date">Date de sortie</label>
            <input type="date" id="release_date" name="release_date" required value="{{ old("release_date") }}" />
        </div>
        <div>
            <label for="thumbnail">Image URL</label>
            <input type="url" id="thumbnail" name="thumbnail" required value="{{ old("release_date") }}" />
        </div>
        <div>
            <input type="submit" value="Créer ma voiture">
        </div>
    </form>
@endsection