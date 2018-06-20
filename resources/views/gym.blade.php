@extends('layouts.app')


@section('gym')

    <h1>Avatar: {{$gym->avatar}}</h1>
    <h1>Name: {{$gym->name}}</h1>
    <h1>Address: {{$gym->address}}</h1>
    <h1>About: {{$gym->about}}</h1>

@endsection