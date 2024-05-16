@extends('layouts.main')

@php
    $thead = ['No', 'Tanggal', 'Jam', 'Deskripsi Keuangan', 'Nama PJ', 'Opsi'];
@endphp

@section('content')
    <x-page-header title="Keuangan" />
    <x-datatable :thead=$thead>
        <x-slot name='header'>
            <div>
                <a href="{{ route('acara.tambah') }}" class="btn btn-shadow btn-outline-secondary d-inline-flex"><i
                        class="ti ti-plus me-1"></i>Input Pemasukan</a>
                <a href="{{ route('acara.tambah') }}" class="btn btn-shadow btn-outline-danger d-inline-flex"><i
                        class="ti ti-plus me-1"></i>Input Pengeluaran</a>
            </div>
        </x-slot>
        @foreach ($data as $item)
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
