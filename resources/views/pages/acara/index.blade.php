@extends('layouts.main')

@php
    $thead = ['No', 'Nama PJ', 'Tanggal'];
@endphp

@section('content')
    <x-page-header title="Beranda" />
    <x-datatable :thead=$thead>
        @foreach ($acara as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->pj }}</td>
                <td>{{ $item->tanggal }}</td>
            </tr>
        @endforeach
    </x-datatable>
@endsection
