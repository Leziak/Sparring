@extends('layouts.app')

@section('profiles')


@foreach($users as $user)
    <h1>Avatar: {{$user->avatar}}</h1>
    <h1>Name: <a href="{{route('profile', ['id'=>$user->id])}}">{{$user->name}}</a></h1>
    <h1>Email: {{$user->email}}</h1>
    <h1>Age: {{$user->age}}</h1>
    <h1>Looking for trainer: {{$user->looking_for_trainer}}</h1>
    <h1>_________________________________________________</h1>
@endforeach

@endsection