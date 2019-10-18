
@extends('layout')

@section('content')
    <h1>Welcome To Settings Page</h1>

    <ul>
        @foreach($array as $arr)
        <li>{{$arr}}</li>

        @endforeach
    </ul>

@endsection