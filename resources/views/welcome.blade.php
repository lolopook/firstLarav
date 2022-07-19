@extends('layouts.app')
    
@section('content')
    
    <h1>Home</h1>

    <h2> {{ $data["firstName"] }} {{ strtoupper($data["lastName"]) }}</h2>
    
@endsection