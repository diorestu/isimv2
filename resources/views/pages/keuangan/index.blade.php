@extends('layouts.main')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/css/uikit.css') }}">
@endpush

@php
    $thead = ['No', 'Dompet Kas', 'Debit', 'Kredit', 'Diinput Oleh', 'Opsi'];
@endphp

@section('content')
    <x-page-header title="Keuangan" />
    <x-datatable :thead=$thead>
        <x-slot name='header'>
            <div>
                <a href="{{ route('keuangan.pemasukan') }}" class="btn btn-shadow btn-outline-secondary d-inline-flex me-2"><i
                        class="ti ti-plus me-1"></i>Input Pemasukan</a>
                <a href="{{ route('keuangan.pengeluaran') }}" class="btn btn-shadow btn-outline-danger d-inline-flex"><i
                        class="ti ti-plus me-1"></i>Input Pengeluaran</a>
            </div>
        </x-slot>
        @foreach ($data as $item)
            <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td>{{ $item->kas->dompet }}</td>
                <td width="15%" class="font-extrabold {{ $item->debit ? 'bg-success text-end' : 'text-center' }}">
                    {{ $item->debit ? rupiah($item->debit) : '-' }}</td>
                <td width="15%" class="font-extrabold {{ $item->kredit ? 'bg-warning text-end' : 'text-center' }}">
                    {{ $item->kredit ? rupiah($item->kredit) : '-' }}</td>
                <td>{{ $item->user->nama }}</td>
                <td class="text-center" width="10%">
                    <a href="#" class="avtar avtar-xs btn-link-secondary">
                        <i class="ti ti-eye f-20"></i>
                    </a>
                    <a href="#" class="avtar avtar-xs btn-link-secondary">
                        <i class="ti ti-edit f-20"></i>
                    </a>
                    <a href="#" class="avtar avtar-xs btn-link-secondary">
                        <i class="ti ti-trash f-20"></i>
                    </a>
                </td>
            </tr>
        @endforeach
    </x-datatable>
@endsection
