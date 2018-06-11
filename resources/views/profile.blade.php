@extends('layouts.app')

@section('profile')


<h1>Name: {{$user->name}}</h1>
<h1>Email: {{$user->email}}</h1>
<h1>Age: {{$user->age}}</h1>
<h1>Sex: {{$user->sex}}</h1>
<h1>About: {{$user->about}}</h1>
<h1>Contact: {{$user->contact}}</h1>
<h1>Avatar: {{$user->avatar}}</h1>
<h1>Nationality: {{$user->nationality}}</h1>
<h1>Height: {{$user->height}}</h1>
<h1>Weight: {{$user->weight}}</h1>
<h1>Level: {{$user->level}}</h1>
<h1>Looking for trainer: {{$user->looking_for_trainer}}</h1>
@if($owner == $user->id)
    <h1><a href="{{route('edit_profile')}}">EDIT PROFILE</a></h1>
@endif
<h1>___________________________________________</h1>
@endsection