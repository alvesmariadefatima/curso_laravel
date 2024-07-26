@extends('layouts.main')

@section('title', 'Editando: '. $event->title)

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Editando: {{ $event->title }}</h1>

    <form action="/events/update/{{ $event->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="image">Imagem do Evento:</label>
            <input type="file" id="image" name="image" class="form-control-file">
            @if($event->image)
                <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}" class="img-preview">
            @endif
        </div>

        <div class="form-group">
            <label for="title">Evento:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do Evento" value="{{ $event->title }}">
        </div>

        <div class="form-group">
            <label for="date">Data do Evento:</label>
            <input type="date" class="form-control" id="date" name="date" placeholder="Data do Evento" value="{{ $event->date->format('Y-m-d') }}">
        </div>

        <div class="form-group">
            <label for="city">Cidade:</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Local do Evento" value="{{ $event->city }}">
        </div>

        <div class="form-group">
            <label for="private">O evento é privado?</label>
            <select name="private" id="private" class="form-control">
                <option value="0" {{ $event->private == 0 ? 'selected' : '' }}>Não</option>
                <option value="1" {{ $event->private == 1 ? 'selected' : '' }}>Sim</option>
            </select>
        </div>

        <div class="form-group">
            <label for="description">Descrição:</label>
            <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento?">{{ $event->description }}</textarea>
        </div>

        <div class="form-group">
    <label for="items">Adicione itens de infraestrutura:</label>
    @php
        // Se $event->items for uma string JSON, decodifique-a. Caso contrário, use-o diretamente como um array.
        $items = is_string($event->items) ? json_decode($event->items, true) : $event->items;
        $items = $items ?? []; // Garante que $items seja um array, mesmo se json_decode retornar null
    @endphp
    @foreach(['Cadeiras', 'Palco', 'Cerveja grátis', 'Open food', 'Brindes'] as $item)
        <div class="form-group">
            <input type="checkbox" name="items[]" value="{{ $item }}" {{ in_array($item, $items) ? 'checked' : '' }}> {{ $item }}
        </div>
    @endforeach
    </div>
    <input type="submit" class="btn btn-primary" value="Editar">

@endsection