@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="jumbotron bg-light p-5 rounded">
        <h1 class="display-4">Bibliotēkas Pasakumi</h1>
        <p class="lead">Izpēti brīnumainus pasakumus un stāstus no visas pasaules</p>
        <hr class="my-4">
    </div>

    <div class="row mt-5">
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">📚 Daudzveidīga Kollekcija</h5>
                    <p class="card-text">Lasi pasakumus no dažādām kultūrām un tradīcijām.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">⭐ Populārie Pasakumi</h5>
                    <p class="card-text">Iepazīsti lasītāju iecienītākos pasakumus un klasiku.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">🔍 Meklēt Pasakumus</h5>
                    <p class="card-text">Ātri atrodi interesējošos pasakumus, izmantojot meklēšanu.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- pasakumi list for CRUD management directly on the home page -->
    <div class="mt-5">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2>Visi ieraksti</h2>
            <a href="{{ route('pasakumi.create') }}" class="btn btn-primary">Pievienot jaunu ierakstu</a>
        </div>

        @if(session('success'))
            <div class="flash flash-success mb-3">{{ session('success') }}</div>
        @endif

        <div class="row">
            @forelse($data as $item)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">📖 {{ $item->nosaukums }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $item->datums }}</h6>
                            <p class="card-text">{{ \Illuminate\Support\Str::limit($item->apraksts ?? '', 100) }}</p>
                            <div class="mt-auto">
                                <a href="{{ route('pasakumi.show', $item->ID) }}" class="btn btn-sm btn-outline-primary">Detalizēti</a>
                                <a href="{{ route('pasakumi.edit', $item->ID) }}" class="btn btn-sm btn-outline-secondary">Labot</a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <p class="text-center">Nav ierakstu</p>
                </div>
            @endforelse
        </div>
    </div>
</div>
@endsection
