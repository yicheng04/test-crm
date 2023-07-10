<?php $articles = Article::all(); ?>

<div id='articles'>
    @foreach ( $articles AS $article )
        <div class='article'>
            <h2>{{ $article->title }}</h2>
            <p>{{ $article->body }}</p>
        </div>
    @endforeach
</div>
