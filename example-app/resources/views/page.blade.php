<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $titre }} - Mon Premier Site Laravel</title>
</head>
<body>
@extends('layout')
@section('title', $titre)
@section('content')
    <div class="container">
        <h1>{{ $texte1 }}</h1>
        
        <p>{{ $texte2 }}</p>
    </div>
@endsection
</body>
</html>