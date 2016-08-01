@extends('app')

@section('content')
    {!! link_to_route('posts','Go to homepage') !!}<hr>
    <h1>Edit post - {!!$posts->id!!}</h1>


    {{--<h1>Edit post# - {!! $posts->id !!}</h1>--}}
    {!! Form::open(['route'=>'post.store']) !!}
    <div class="form-group">
        {!! Form::label('slug') !!}
        {!! Form::text('slug',  $posts->slug, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('title') !!}
        {!! Form::text('title', $posts->title, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('excerpt') !!}
        {!! Form::textarea('excerpt',$posts->excerpt, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('content') !!}
        {!! Form::textarea('content', $posts->content, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('published') !!}
        {!! Form::checkbox('published', null, false) !!}
    </div>
    <div class="form-group">
        {!! Form::label('published_at') !!}
        {!! Form::input('date', 'published_at', date('Y-m-d'), ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Save edit', ['class'=>'btn btn_primary']) !!}
    </div>
    {!! Form::close()!!}

@endsection