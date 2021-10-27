@extends('layouts.app')

@section('title', 'Comics')

@section('content')
    <ul class="comics">
        @foreach ($comics as $comic)
        <li class="comic">
            <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}"> 
            <div>{{$comic['title']}}</div>
        </div>
        @endforeach 
    </div>
@endsection
