{{-- resources/views/alldata.blade.php --}}
@extends('layouts.app')

@section('content')
    <h1>Visi ieraksti</h1>

    @if(session('success'))
        <div class="flash flash-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('pasakumi.create') }}" class="btn">Pievienot jaunu ierakstu</a>

    <table border="1" cellpadding="12" cellspacing="0" style="margin-top:16px; width:100%; border-collapse:collapse; table-layout:auto;">
        <colgroup>
            <col style="width:40%;">
            <col style="width:25%;">
            <col style="width:20%;">
        </colgroup>
        <thead>
            <tr>
                <th style="text-align:center;">Nosaukums</th>
                <th style="text-align:center;">Datums</th>
                <th style="text-align:center;">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
                <tr>
                    <td style="text-align:center;">{{ $item->nosaukums }}</td>
                    <td style="text-align:center;">{{ $item->datums }}</td>
                    <td style="text-align:center;">
                        <a href="{{ route('pasakumi.show', $item->ID) }}" class="btn secondary">Detalizēti</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
