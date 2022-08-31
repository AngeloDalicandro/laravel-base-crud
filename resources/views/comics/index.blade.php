@extends('layouts.app')

@section('main_content')

    @foreach($comics as $comic)

        <div>
            {{ $comic['title'] }} - Prezzo: {{ $comic['price'] }}&euro; <br>

        </div>

        <br>

    @endforeach
@endsection