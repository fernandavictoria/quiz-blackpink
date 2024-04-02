@extends('layout')
@section('content')
<div class="jumbotron">
    <p class="h3 text-center py-4">Quiz - O que você sabe sobre o BLACKPINK?</p>
</div>
<div class="row">
    <div class="col-md-6 col-sm-6 text-center imagem">
        <a href="#" class="img-thumbnail logo">
            <img class="img-fluid" src="{{ asset('storage/imagem/BLACKPINK1.webp') }}" />
        </a>
    </div>
    <div class="col-md-6 col-sm-6 text-center py-4">
        <p class="texto">
            <h4>Este quiz é para saber o quanto você sabe sobre o grupo<br>
                <strong>BLACKPINK</strong>
            </h4>
        </p>
        <div class="card-footer py-4 text-center">
            <a href="{{route('pagina1')}}" class="btn btn-primary" role="button">iniciar</a>
          
        </div>
    </div>
</div>
@endsection





