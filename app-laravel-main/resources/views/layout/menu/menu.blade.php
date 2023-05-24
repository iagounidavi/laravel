@extends('layout.main.main')

@section('content')
<div class="container align-items-center">
    <hr class="border border-primary border-3 opacity-75">
    <h1 class="fs-1">
        Filmes
    </h1>
    <hr class="border border-primary border-3 opacity-75">
</div>
@endsection

@section('sidebar')
    <nav class="nav flex-column">
        <a class="nav-link" href="http://localhost:8989/ ">Home</a>
        <a class="nav-link" href="http://localhost:8989/movie/store">Adicionar filme</a>
        <a class="nav-link" href="http://localhost:8989/contato">Contato</a>
        <a class="nav-link" href="http://localhost:8989/credito">Creditos</a>
    </nav>
@endsection

