{{-- resources/views/alldata.blade.php --}}
@extends('layouts.app')

@section('content')
    <h1>Visi ieraksti</h1>

    @if(session('success'))
        <div class="flash flash-success">{{ session('success') }}</div>
    @endif

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Visi ieraksti</h2>
        <a href="{{ route('pasakumi.create') }}" class="btn btn-primary">Pievienot jaunu ierakstu</a>
    </div>

    <div class="row">
        @foreach($data as $item)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">📖 {{ $item->nosaukums }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $item->datums }}</h6>
                        <p class="card-text">{{ \Illuminate\Support\Str::limit($item->apraksts ?? '', 100) }}</p>
                        <div class="mt-auto">
                            <a href="{{ route('pasakumi.show', $item->ID) }}" class="btn btn-sm btn-outline-primary">Detalizēti</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
