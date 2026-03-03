{{-- resources/views/details.blade.php --}}
@extends('layouts.app')

@section('content')
    <h1>Detaļas</h1>

    <p><strong>ID:</strong> {{ $data->ID }}</p>
    <p><strong>Nosaukums:</strong> {{ $data->nosaukums }}</p>
    <p><strong>Kategorija:</strong> {{ $data->kategorija }}</p>
    <p><strong>Datums:</strong> {{ $data->datums }}</p>
    <p><strong>Laiks:</strong> {{ $data->sakuma_laiks }}–{{ $data->beigu_laiks }}</p>
    <p><strong>Apraksts:</strong> {{ $data->apraksts }}</p>
    <p><strong>Max dalībnieku:</strong> {{ $data->max_dalibnieku }}</p>
    <p><strong>Darbinieks ID:</strong> {{ $data->darbinieks_id }}</p>
    <p><strong>Telpa ID:</strong> {{ $data->telpa_id }}</p>

    <div style="margin-top:16px;">
        <a href="{{ route('pasakumi.edit', $data->ID) }}" class="btn">Labot</a>
        <form action="{{ route('pasakumi.destroy', $data->ID) }}" method="POST" style="display:inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn" onclick="return confirm('Tiešām dzēst?')">Dzēst</button>
        </form>
        <a href="{{ route('pasakumi.index') }}" class="btn secondary">Atpakaļ uz sarakstu</a>
    </div>
@endsection
