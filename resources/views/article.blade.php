@extends('layouts.app')

@section('title', $article->title)

@section('content')
    <article class="article-detail">
        <h1>{{ $article->title }}</h1>
        <img src="{{ $article->image }}" alt="{{ $article->title }}">
        <div class="content">
            {!! $article->content !!}
        </div>
    </article>
@endsection
