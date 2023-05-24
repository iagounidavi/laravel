@extends('layout.menu.menu')

@section('content')
<div class="container align-items-center">
    <hr class="border border-primary border-3 opacity-75">
    <h1 class="fs-1">
        Adicionar Filmes
    </h1>
    <hr class="border border-primary border-3 opacity-75">
</div>
@endsection

@section('form')
<form class="row gx-3 gy-3 align-items-center mt-5" method="POST" action="{{ route('movie.store') }}">
  <div class="col-sm-3">
    <label class="form-check-label" for="specificSizeInputName mb-5">Filme</label>
    <input type="text" class="form-control" id="specificSizeInputName" placeholder="O Iluminado">
  </div>
  <div class="col-sm-3">
      <label class="form-check-label" for="specificSizeSelect">Gênero</label>
      <select class="form-select" id="specificSizeSelect">
      <option selected>Gênero...</option>
      <option value="acao">Ação</option>
      <option value="aventura">Aventura</option>
      <option value="animacao">Animação</option>
      <option value="comedia">Comédia</option>
      <option value="crime">Crime</option>
      <option value="documentario">Documentário</option>
      <option value="drama">Drama</option>
      <option value="fantasia">Fantasia</option>
      <option value="horror">Horror</option>
      <option value="misterio">Mistério</option>
      <option value="romance">Romance</option>
      <option value="ficcao-cientifica">Ficção Científica</option>
      <option value="suspense">Suspense</option>
      <option value="terror">Terror</option>
      <option value="western">Western</option>
      <option value="biografia">Biografia</option>
      <option value="musical">Musical</option>
      <option value="historico">Histórico</option>
      <option value="guerra">Guerra</option>
      <option value="esporte">Esporte</option>
      <option value="familia">Família</option>
      <option value="fantasia-cientifica">Fantasia Científica</option>
      <option value="superheroi">Super-herói</option>
      <option value="epico">Épico</option>
      <option value="noir">Noir</option>
      <option value="neo-noir">Neo-noir</option>
      <option value="experimental">Experimental</option>
      <option value="musical">Musical</option>
      <option value="parodia">Paródia</option>
      <option value="policial">Policial</option>
      <option value="fantasia-urbana">Fantasia Urbana</option>
      <option value="fantasia-medieval">Fantasia Medieval</option>
      <option value="terror-psicologico">Terror Psicológico</option>
      <option value="fantasia-sombria">Fantasia Sombria</option>
      <option value="comedia-romantica">Comédia Romântica</option>
      <option value="thriller-politico">Thriller Político</option>
      <option value="suspense-psicologico">Suspense Psicológico</option>
      <option value="terror-sobrenatural">Terror Sobrenatural</option>
      <option value="drama-criminal">Drama Criminal</option>
      <option value="ficcao-cientifica-distopica">Ficção Científica Distópica</option>
    </select>
  </div>
  <div class="col-sm-3 align-item-bottom">
    <button type="submit" class="btn btn-primary" href=" {{ route('MovieController.movieList') }} ">Submeter</button>
  </div>
</form>
@endsection
