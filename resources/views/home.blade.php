@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="hero">
        <h1>Welcome to Divergent Travelers</h1>
        <p>Your adventure begins here.</p>
    </div>

    <section class="latest-articles">
        <h2>Latest Articles</h2>
        <div class="articles">
            @foreach ($latestArticles as $article)
                <article>
                    <a href="{{ url('article/' . $article->slug) }}">
                        <img src="{{ $article->image }}" alt="{{ $article->title }}">
                        <h3>{{ $article->title }}</h3>
                    </a>
                    <p>{{ $article->excerpt }}</p>
                </article>
            @endforeach
        </div>
    </section>
@endsection
