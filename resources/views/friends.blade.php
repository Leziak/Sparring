@if(count($friends)>0)
    <h1>Friends:</h1>
    @foreach($friends as $friend)


        {{$friend->name}}


    @endforeach

@endif