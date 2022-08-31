@extends('layouts.app')

@section('main_content')

    <h1> {{ $comic['title'] }} </h1>

    <div> Tipo di prodotto: {{ $comic['type'] }}. </div> <br>
    <div> Prezzo: {{ $comic['price'] }}&euro;. </div> <br>
    <div> Serie: {{ $comic['series'] }}. </div> <br>
    <div> Inizio serializzazione: {{ $comic['sale_date'] }}. </div> <br>
    <div> Descrizione: {{ $comic['description'] }} </div> <br>

    <div>
        <img src="{{ $comic['thumb'] }}" alt=" {{ $comic['title']}} thumb ">
    </div>
@endsection