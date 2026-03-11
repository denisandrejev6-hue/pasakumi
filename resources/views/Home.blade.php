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
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">🛠 Pārvaldīt pasākumus</h5>
                    <p class="card-text">Skatīt, pievienot vai labot pasākumus tieši no CRUD interfeisa.</p>
                    <a href="{{ route('pasakumi.index') }}" class="btn btn-primary mt-2">Atvērt CRUD</a>
                </div>
            </div>
        </div>
    </div>

    {{-- quick CRUD preview section --}}
    <div class="container mt-5">
        <h2 class="page-title">Pārvaldīt pasākumus</h2>
        @if(isset($preview) && $preview->count())
            <table class="table table-striped" style="width:100%; margin-top: 16px;">
                <thead>
                    <tr>
                        <th>Nosaukums</th>
                        <th>Datums</th>
                        <th>Veikt</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($preview as $item)
                        <tr>
                            <td>{{ $item->nosaukums }}</td>
                            <td>{{ $item->datums }}</td>
                            <td>
                                <a href="{{ route('pasakumi.edit', $item->ID) }}" class="btn btn-secondary">Labot</a>
                                <form action="{{ route('pasakumi.destroy', $item->ID) }}" method="POST" style="display:inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn" onclick="return confirm('Dzēst šo ierakstu?')">Dzēst</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>Nav pieejamu pasākumu priekšskatam.</p>
        @endif
        <a href="{{ route('pasakumi.index') }}" class="btn btn-primary mt-3">Skatīt visus / pievienot jaunu</a>
    </div>
</div>
@endsection
