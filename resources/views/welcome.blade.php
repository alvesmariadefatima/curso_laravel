@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

<div id="search-container" class="col-md-12">
    <h1>Busque um evento</h1>
    <form action="">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar">
    </form>
</div>

<div id="events-container" class="col-md-12">
    <h2>Próximos Eventos</h2>
    <p>Veja os eventos dos próximos dias</p>
    <div id="cards-container" class="row">
        @foreach($events as $event)
        <div class="card col-md-3">
            <img src="/img/rogadx_event.jpeg" alt="{{ $event->title }}">
            <div class="card-body">
                <p class="card-date">30 e 31/08/2024</p>
                <p class="card-title">{{ $event->title }}</p> <!-- Colocando o título do evento como conteúdo da tag <p> -->
                <p class="card-participants">X Participantes</p>
                <a href="#" class="btn btn-primary">Saiba mais</a>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection