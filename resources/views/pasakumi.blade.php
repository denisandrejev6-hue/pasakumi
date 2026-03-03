@extends('layouts.app') <!-- pievieno app.blade.php sagatavi -->

@section('content')
    <h1>Meistari</h1>
    <br>
    <p>Šeit būs informācija par meistariem</p>
    <br>
    <a href="{{ route('pasakumi.index') }}" class="btn btn-success">Skatīt visus meistarus</a>
@endsection

<a href="{{ route('pasakumi.show', $pasakums->id) }}" class="btn btn-primary">Detalizēti</a>

@section('sidemenu')
    <!-- Этот код будет отображен в сайдменю -->
    <div class="card">
        <h2>Side menu</h2>
        <p>Šeit var ievietot papildu navigāciju vai saturu.</p>
    </div>
@endsection
