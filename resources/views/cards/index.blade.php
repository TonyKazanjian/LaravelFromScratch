@extends('layout')

@section('content')
    <h1>All Cards</h1>
    @foreach($cards as $card)
        <div>
            <a href="/cards/{{$card->id}}">{{ $card -> title }}</a>

            <!-- $card->path() gives us a string representation of URI on the card itself -->

        </div>
    @endforeach
@stop