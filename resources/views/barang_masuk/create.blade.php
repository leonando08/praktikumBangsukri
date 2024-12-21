@extends('template.default')

@section('content')
<div class="row">
    <div class="col-md-6">
        <h3>Tambah Data Barang Masuk</h3>
    </div>
    <div class="col-md-6">
        <a href="{{ route('barang_masuk.index') }}" class="btn btn-primary btn-sm float-end">
            <i class="fa fa-arrow-circle-left"></i> Kembali
        </a>
    </div>
</div>
<div class="card px-3 py-3">
    <form action="{{ route('barang_masuk.store') }}" method="POST">
        @csrf
        @method('POST')
        <div class="mb-3">
            <label for="tanggal">Tanggal</label>
            <input 
                type="date" 
                class="form-control @error('tanggal') is-invalid @enderror" 
                name="tanggal" 
                id="tanggal" 
                value="{{ old('tanggal') }}" 
                required>
            @error('tanggal')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class ="mb-3">
            <label for="sumber_dana">Sumber Dana</label>
            <select class="form-control @error('sumber_dana') is-invalid @enderror"name="sumber_dana" id="sumber_dana">
                <option value="">Pilih Sumber Dana</option>
                <option value="Hibah" {{ old('sumber_dana') == 'Hibah' ? 'selected' : ''}}>Hibah</option>
                <option value="Penganggaran" {{ old('sumber_dana') == 'Pengangaran' ? 'selected' : ''}}>Penganggaran</option>
            </select>
            @error('sumber_dana')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class ="mb-3">
            <label for="pemasok_id">Pemasok</label>
            <select class="form-control @error('pemasok_id') is-invalid @enderror"name="pemasok_id" id="pemasok_id">
                <option value="">Pilih Pemasok</option>
                @foreach ($pemasoks as $pemasok )
                <option value="{{ $pemasok->id }}" @selected(old('pemasok_id') == $pemasok->id)>{{ $pemasok->nama_pemasok}}</option>
                @endforeach
                </option>
            </select>
            @error('pemasok_id')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class ="mb-3">
            <label for="karyawan_id">Karyawan</label>
            <select class="form-control @error('karyawan_id') is-invalid @enderror" name="karyawan_id" id="karyawan_id">
                <option value="">Pilih Karyawan</option>
                @foreach ($karyawans as $karyawan )
                <option value="{{$karyawan->id}}" @selected(old('karyawan_id') == $karyawan->id)>{{ $karyawan->nama_karyawan}}</option>
                @endforeach
                </option>
            </select>
            @error('karyawan_id')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="col mb-3">
            <button class="btn btn-success" type="submit">
                <i class="fas fa-save"></i>
                Simpan
            </button>
        </div>
    </form>
</div>
@endsection