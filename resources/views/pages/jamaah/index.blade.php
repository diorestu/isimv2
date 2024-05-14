@extends('layouts.main')

@php
    $thead = ['No', 'Tanggal', 'Jam', 'Deskripsi Acara', 'Nama PJ', 'Opsi'];
@endphp

@section('content')
    <x-page-header title="Acara" />
    <x-datatable :thead=$thead>
        <x-slot name='header'>
            <a href="{{ route('acara.tambah') }}" class="btn btn-shadow btn-secondary d-inline-flex text-white"><i
                    class="ti ti-plus me-1"></i>Tambah</a>
        </x-slot>
        @foreach ($acara as $item)
            <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td>{{ tanggalIndo($item->tanggal) }}</td>
                <td>{{ TampilJamMenit($item->jam) }}</td>
                <td>{{ $item->deskripsi }}</td>
                <td>{{ $item->pj }}</td>
                <td></td>
            </tr>
        @endforeach
    </x-datatable>
@endsection
