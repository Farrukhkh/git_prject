@extends('app')

@section('content')

<h1>Edit</h1>
{{--<a href="edit/1">Post1</a>--}}
{{--@foreach($posts as $post)--}}
    {{--<br>{{$post->id}}--}}
{{--@endforeach--}}
@foreach($posts as $post)
    <div style="padding-left: 40px"><a href="edit/{{$post->id}}">{{$post->title}}</a> </div>

    <hr>
@endforeach

@endsection