@extends('app')
sdfsdfdsf
@section('content')
<div style="margin-bottom: 40px; border-bottom: solid 1px #CCC">
	{!! link_to_route('posts','Published') !!} &nbsp;&nbsp;&nbsp;
    {!! link_to_route('posts.unpublished','Unpublished') !!} &nbsp;&nbsp;&nbsp;
    {!! link_to_route('post.create','New') !!}  &nbsp;&nbsp;&nbsp;
    {!! link_to_route('post.edit','Edit') !!}  &nbsp;&nbsp;&nbsp;
</div>
 @foreach($posts as $post)
 	<article>
    	<H2>{!!$post->title!!}</H2>
        <p>{!!$post->excerpt!!}</p>
        <p>published:{!!$post->published_at  !!}</p>
    </article>
     <hr>
 @endforeach
@stop
