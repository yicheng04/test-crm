<?php 
    $page['title'] = 'Articles (News)';
    $page['sideblocks'] = [ 'dashboard._sidebar' ];
    $page['css'] = 'dashboard';
?>

@extends( 'templates.default' )
@section( 'content' )

<p><a class='button small' href='/articles/create'>Create New Article</a></p>



<div class='articles'>
    <table>
        <tr>
            <th>Date</th>
            <th>Title</th>
        </tr>
        @foreach ( $articles AS $article )
            <tr>
                <td class="day"><a href="/articles/{{ $article->id }}">{{ $article->day }}</a></td>
                <td class="title"><a href="/articles/{{ $article->id }}">{{ $article->title }}</a></td>
            </tr>
        @endforeach
    </table>
</div>

@stop
