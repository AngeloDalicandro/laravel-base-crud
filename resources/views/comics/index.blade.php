@extends('layouts.app')

@section('main_content')

    @foreach($comics as $comic)

        <div>
            {{ $comic['title'] }} - <a href=" {{ route('comics.show', ['comic' => $comic->id]) }} ">Read more</a>
        </div>

        <br>

    @endforeach
@endsection