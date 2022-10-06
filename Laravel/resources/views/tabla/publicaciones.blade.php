@extends('index')

@section('title')


@section('content')
<div style="width:500px">
    <h1>Publicaciones</h1>
@foreach ($publicaciones as $publicacion)
    <p>{{ $publicacion->body }}</p>
@endforeach
</div>
<span >
<a style="text-decoration:none;font-weight: bold;" href="?page={{ $page-10 }}">Anterior</a> - <a style="text-decoration:none;font-weight: bold;" href="?page={{ $page+10 }}">Siguiente</a>
</span>
</div>


@endSection