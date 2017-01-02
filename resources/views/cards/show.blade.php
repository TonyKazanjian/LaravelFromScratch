@extends('layout')

@section('content')
    <div class="row">

        <div class="col-md-6 col-md-offset-3">
            <h1>{{$card -> title}}</h1>

            <ul class="list-group">
                @foreach($card->notes as $note)


                    <div>
                        <li class="list-group-item">


                            <a href="/notes/{{$note->id}}/edit">{{ $note -> body }}</a>

                            <a href="#" class="pull-right">{{ $note -> user->username }}</a>

                        </li>

                        <!-- $card->path() gives us a string representation of URI on the card itself -->
                    </div>
                @endforeach

            </ul>

            <hr>
            <h3>Add a New Note</h3>

            <form method="POST" action="/cards/{{$card->id}}/notes">
                {{ csrf_field() }}
                <div class="form-group">
                    <textarea name="body" class="form-control">{{ old('body') }}</textarea>
                </div>
                {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add Note</button>
                </div>
            </form>

            @if (count($errors))
                <ul>
                    @foreach($errors->all() as $error)

                        <li>
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>

            @endif


        </div>


    </div>

@stop