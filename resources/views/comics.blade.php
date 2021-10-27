@extends('layouts.app')

@section('title', 'Comics')

@section('content')
    <div class="comics">
        @foreach ($comics as $comic)
        <div class="comic">
            <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}"> 
            <div>{{$comic['title']}}</div>
        </div>
        @endforeach 
    </div>
@endsection
