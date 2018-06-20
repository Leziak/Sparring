@extends('layouts.app')

@section('gyms')


    @foreach($gyms as $gym)


        <h1>Avatar: {{$gym->avatar}}</h1>
        <h1>Name: <a href="{{route('gym', ['id'=>$gym->id])}}">{{$gym->name}}</a></h1>
        <h1>Address: {{$gym->address}}</h1>
        <h1>_________________________________________________</h1>


    @endforeach



@endsection