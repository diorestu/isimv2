@extends('layouts.main')

@section('content')
    <x-page-header title="Tambah Jamaah" />
    <x-card title="">
        <div class="d-flex justify-content-between">
            <h5 class="text-muted">Input Data KK Jamaah</h5>
            <button type="submit" class="btn btn-dark" form="myForm">Simpan</button>
        </div>
        <hr>
        <form action="{{ route('jamaah.simpan.kk') }}" method="post" id="myForm">
            @csrf
            @method('POST')
            <div class="row g-3">
                <div class="col-6 row g-3">
                    <div class="col-md-6">
                        <x-input type='text' name="nkk" placeholder="No. KK">No. KK</x-input>
                    </div>
                    <div class="col-md-6">
                        <x-input type='text' name="nik" placeholder="NIK KK">NIK KK</x-input>
                    </div>
                    <div class="col-md-6">
                        <x-input type='text' name="nama" placeholder="Nama KK">Nama KK</x-input>
                    </div>
                    <div class="col-md-6">
                        <x-input type='text' name="tgl_lahir" placeholder="Tanggal Lahir">Tanggal Lahir</x-input>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <select class="form-select" id="floatingSelect" name="gender"
                                aria-label="Floating label select example">
                                <option selected="" disabled>Pilih Jenis Kelamin</option>
                                <option value="Pria">Pria</option>
                                <option value="Wanita">Wanita</option>
                            </select>
                            <label for="floatingSelect">Jenis Kelamin</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <x-input type='text' name="wilayah" placeholder="Wilayah">Wilayah</x-input>
                    </div>
                </div>

                <div class="col-6 row g-3">
                    {{-- <div class="col-md-4">
                        <div class="form-floating">
                            <select class="form-select" id="floatingSelect" name="id_kas"
                                aria-label="Floating label select example">
                                <option selected="" disabled>Pilih Hubungan Keluarga</option>
                                <option value="KK">KK</option>
                                <option value="Istri">Istri</option>
                                <option value="Orang Tua">Orang Tua</option>
                                <option value="Anak">Anak</option>
                                <option value="Saudara">Saudara</option>
                            </select>
                            <label for="floatingSelect">Hubungan Keluarga</label>
                        </div>
                    </div> --}}
                    <div class="col-md-6">
                        <div class="form-floating">
                            <select class="form-select" id="floatingSelect" name="st_yatim"
                                aria-label="Floating label select example">
                                <option selected="" disabled>Pilih Status Yatim</option>
                                <option value="">Tidak Ada</option>
                                <option value="Yatim">Yatim</option>
                                <option value="Piatu">Piatu</option>
                                <option value="Yatim Piatu">Yatim Piatu</option>
                            </select>
                            <label for="floatingSelect">Status Yatim</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <select class="form-select" id="floatingSelect" name="st_keuangan"
                                aria-label="Floating label select example">
                                <option selected="" disabled>Pilih Status Keuangan</option>
                                <option value="Cukup Mampu">Cukup Mampu</option>
                                <option value="Fakir Miskin">Fakir Miskin</option>
                            </select>
                            <label for="floatingSelect">Status Keuangan</label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-floating">
                            <textarea class="form-control" id="floatingTextarea1" name="alamat" style="height: 120px"></textarea>
                            <label for="floatingTextarea2">Alamat KK</label>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </x-card>
@endsection
