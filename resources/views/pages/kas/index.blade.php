@extends('layouts.main')

@php
    $thead = ['No', 'Judul', 'Saldo', 'Target', 'Nama PJ', 'Opsi'];
@endphp

@section('content')
    <x-page-header title="Kas" />
    <x-datatable :thead=$thead>
        <x-slot name='header'>
            <a href="{{ route('kas.tambah') }}" class="btn btn-shadow btn-secondary d-inline-flex text-white"><i
                    class="ti ti-plus me-1"></i>Tambah</a>
        </x-slot>
        @foreach ($data as $item)
            <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td>{{ $item->dompet }}</td>
                <td>{{ rupiah($item->saldo) }}</td>
                <td>{{ rupiah($item->target) }}</td>
                <td>{{ $item->user->nama }}</td>
                <td width=10% class="text-center">
                    <div class="btn-group dropend btn-group-sm">
                        <button type="button" class="btn btn-outline-secondary"> Detail </button>
                        <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#!">Ubah</a>
                            <a class="dropdown-item text-danger font-extrabold" href="#!">Hapus</a>
                        </div>
                    </div>
                    </div>
                </td>
            </tr>
        @endforeach
    </x-datatable>
@endsection
