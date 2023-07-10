<?php
$m=Route::current()->uri();
$page['title'] = ucfirst( $m );
$page['breadcrumb'] = '<a href="/">home</a> &gt; ' . $m;
$page['css'] = $m;
$page['js'] = $m;
?>

@extends( 'templates.default' )
@section( 'content' )

@include( 'editor.files._' . $m )

<p>Loremm ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum accumsan ante in magna eleifend, ut sodales justo lobortis. Integer tempus eu erat ut tincidunt. Sed auctor ex eget dui finibus, aliquam rutrum nisl vehicula. Proin ullamcorper quis ligula at bibendum. Nam id finibus sem, eu dapibus odio. Aliquam aliquet lectus eget quam varius, id vehicula massa tincidunt. Curabitur interdum eros id sodales fermentum. Nullam in justo leo. Nunc vel nisi vel urna vulputate fermentum. Morbi pellentesque cursus egestas. Maecenas a erat ligula.</p>

<p>Nam vestibulum, urna vel consectetur cursus, nunc elit sagittis risus, in egestas massa tellus id nisl. Vivamus vel accumsan massa. Nam purus dolor, eleifend sed nunc ac, dapibus euismod eros. Donec consectetur bibendum gravida. Praesent gravida maximus risus ut consequat. Maecenas placerat finibus accumsan. Aliquam nec ex faucibus, aliquet nibh quis, porta diam. Nulla iaculis risus at ante pretium molestie. Vivamus a lectus vitae felis dignissim dapibus.</p>

<p>Aenean varius efficitur iaculis. Suspendisse congue commodo pretium. Morbi vulputate imperdiet dolor, quis ultricies ante tempus tincidunt. Praesent quam massa, vehicula nec dapibus faucibus, blandit eu lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur odio nunc, luctus nec nulla ac, sollicitudin tempus lorem. Fusce quis orci id est efficitur interdum. Aenean placerat ligula auctor arcu accumsan, et gravida augue vulputate.</p>

<p>Pellentesque rhoncus eros nisl, eget tristique massa ultricies at. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc dignissim libero vitae lectus feugiat maximus. Nunc ut nisl leo. Praesent elit augue, facilisis ut faucibus quis, convallis at nisl. Aenean mattis tincidunt ornare. Duis convallis et mauris et fringilla. Aenean nec rutrum erat. Curabitur auctor vehicula arcu sed condimentum. Donec vel sem blandit massa rhoncus egestas. Ut semper ultricies dapibus.</p>

<p>Suspendisse ut nulla eros. Aliquam id vehicula est, non lobortis lacus. Praesent ac dolor et nisl aliquam bibendum. Nullam fringilla metus ac ipsum gravida, sagittis mattis justo feugiat. Phasellus cursus ac diam lacinia accumsan. Nunc semper a dolor at placerat. Nam at augue malesuada, volutpat enim semper, egestas neque. Nullam id nulla vel elit tristique iaculis ac eu purus.</p>

@stop








