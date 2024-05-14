@extends('layouts.main')

@section('content')
    <x-page-header title="Tambah Acara" />
    <x-card title="">
        <div class="d-flex justify-content-between">
            <h5>Detail Acara</h5>
            <button type="submit" class="btn btn-dark" form="myForm">Simpan</button>
        </div>
        <hr>
        <form action="{{ route('acara.simpan') }}" method="post" id="myForm">
            @csrf
            @method('POST')
            <div class="row g-4">
                <div class="col-md-3">
                    <x-input type='date' name="tanggal" placeholder="Tanggal Acara">Tanggal Acara</x-input>
                </div>
                <div class="col-md-3">
                    <x-input type='time' name="jam" placeholder="Jam Acara">Jam Acara</x-input>
                </div>
                <div class="col-md-6">
                    <x-input type='text' name="pj" placeholder="Penanggung Jawab">Penanggung Jawab</x-input>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <textarea class="form-control" id="floatingTextarea1" name="deskripsi" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Keterangan</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <textarea class="form-control" id="floatingTextarea2" name="fasilitas" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Fasilitas</label>
                    </div>
                </div>
            </div>
        </form>
    </x-card>
@endsection
