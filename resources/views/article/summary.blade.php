<?php 
    $page['title'] = 'News'; 
    //$page['sideblocks'] = ['article/_facebook-sidebar'];
    $page['js'] = 'articles';
    $page['css'] = 'news';
?>
<?php $intro = \App\Content::where( 'slug', '=', 'news' )->first(); ?>

@extends( 'templates.default' )
@section( 'content' )

<div id='news-intro'>
  {!! (!empty($intro) ? $intro->body : '') !!}
</div>

<hr>

<div class='articles'>
    @foreach ( $articles AS $article )
      <div class="article-wrap">
       @if ( isset( $article->image ) && strlen( $article->image ) > 0 )
        <div class="article-image-wrap">
          <div class="article-image">
            <img alt="" src='/data/articles/img/{{ $article->image }}' />
          </div>
        </div>
        @endif
        <div class="article">
            <div class="title"><a href="/articles/{{ $article->id }}">{{ $article->title }}</a></div>
            <div class="date">{{ $article->day }}</div>
            <div class="teaser">{!! str_limit( strip_tags($article->body), $limit = 500, $end = '...') !!}</div>
        </div>
      </div>
    @endforeach
</div>

@stop
