@extends('layouts.main')

@section('content')
    <x-page-header title="Tambah Pemasukan" />
    <x-card title="">
        <div class="d-flex justify-content-between">
            <h5>Detail Pemasukan</h5>
            <button type="submit" class="btn btn-dark" form="myForm">Simpan</button>
        </div>
        <hr>
        <form action="{{ route('keuangan.input.pemasukan') }}" method="post" id="myForm">
            @csrf
            @method('POST')
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="form-floating">
                        <select class="form-select" id="floatingSelect" name="id_kas"
                            aria-label="Floating label select example">
                            <option selected="" disabled>Pilih Dompet Kas</option>
                            @foreach ($data as $item)
                                <option value="{{ $item->id }}">{{ $item->dompet }}</option>
                            @endforeach
                        </select>
                        <label for="floatingSelect">Dompet Kas</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <x-input type='number' name="debit" placeholder="Nominal Pemasukan">Nominal Pemasukan</x-input>
                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <textarea class="form-control" id="floatingTextarea1" name="notes" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Keterangan</label>
                    </div>
                </div>
            </div>
        </form>
    </x-card>
@endsection
