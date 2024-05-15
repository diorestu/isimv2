@extends('layouts.main')

@section('content')
    <x-page-header title="Tambah Kas" />
    <x-card title="">
        {{ Auth::user() }}
        <div class="d-flex justify-content-between">
            <h5>Detail Kas</h5>
            <button type="submit" class="btn btn-dark" form="myForm">Simpan</button>
        </div>
        <hr>
        <form action="{{ route('kas.simpan') }}" method="post" id="myForm">
            @csrf
            @method('POST')
            <div class="row g-4">
                <div class="col-md-6">
                    <x-input type='text' name="dompet" placeholder="Nama Kas">Nama Kas</x-input>
                </div>
                <div class="col-md-3">
                    <x-input type='number' name="target" placeholder="Target">Target</x-input>
                </div>
                <div class="col-md-3">
                    <x-input type='number' name="saldo" placeholder="Saldo Awal">Saldo Awal</x-input>
                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <textarea class="form-control" id="floatingTextarea1" name="keterangan" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Keterangan</label>
                    </div>
                </div>
            </div>
        </form>
    </x-card>
@endsection
