@extends('app')

@section('content')
    {!! link_to_route('posts','Go to homepage') !!}<hr>
<h1>Create</h1>
	{!! Form::open(['route'=>'post.store']) !!}
        @include('post._form')
    {!! Form::close()!!}

@endsection