<?php
    $page['css'] = 'home';
    $page['js'] = 'home';
    $page['banner'] = $banners;
?>

@extends( 'templates.default' )
@section( 'content' )

<div class="divisions-wrapper">
  @foreach( $main_blocks as $block )
    <div class="division {{ $block->css }}">
      <div class="overlay"></div>
      <a href={{ url( $block->path) }}>
        <div class="block-content">
          <div class="icon"><img src="/img/icons/{{ $block->icon }}" /></div>
          <h2 class="block-title">{{ $block->title }}</h2>
          <p>{{ $block->text }}</p>
        </div>
      </a>
    </div>
  @endforeach
</div>

<div class="news-wrapper">
  <div class="inner-wrapper">
    <h2 class="block-title">What's Happening at this Website?</h2>
    <div class="blocks">
    @foreach( $news as $news_item)
      <div class="news-block block">
        <div class="date">{{ date('F d, Y', strtotime($news_item->created_at)) }}</div>
        <div class="title"><a href="{{ route('articles.show', $news_item->id) }}">{{ $news_item->title }}</a></div>
        <div class="teaser">{!! str_limit( strip_tags($news_item->body), $limit = 250, $end = '...') !!}<a href="{{ route('articles.show', $news_item->id) }}">read more</a></div>
      </div>
    @endforeach
      <div class="view-all-btn"><a class="btn gray arrow-right" href="/news">view past news</a></div>
    </div>
  </div>
</div>

<div class="row-wrapper">
  @foreach( $sub_blocks as $block )
    <div class="{{ $block->css }}">
      <div class="equalheight block-content">
        <h2>{{ $block->title }}</h2>
        <p>{{ $block->text }}</p>
        <p><a class="btn {{ $block->button_css }}" href={{ url($block->path) }}>{{ $block->button_text }}</a></p>
      </div>
    </div>
  @endforeach
</div>

@stop
