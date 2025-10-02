@extends('layouts.layout')

@section('title', $titre)

@section('content')
    <div class="container">
        <h1>{{ $texte1 }}</h1>
        
        <p>{{ $texte2 }}</p>
    </div>
@endsection