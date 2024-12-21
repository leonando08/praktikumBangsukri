@extends('template.default')

@section('content')
    @if (session('success'))
        <div class="alert alert-primary" role="alert">
                {{ session('success') }}
        </div>
    @endif
    <div class="row">
        <div class="col-md-6">
            <h3>Barang Masuk</h3>
        </div>
        <div class="col-md-6">
            <a href="{{ route('barang_masuk.create') }}" class="btn btn-success btn-sm float-end">
                <i class="fa fa-plus-circle"></i> Tambah
            </a>
        </div>
        <div class="row mt-3">
            <div class="col">
                <table class="table bg-white rounded shadow-sm table-hover">
                    <thead>
                        <tr>
                            <th scope="col" width="50">#</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Sumber Dana</th>
                            <th scope="col">Pemasok</th>
                            <th scope="col">Penerima</th>
                            <th style="width: 200px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($barang_masuks as $barang_masuk)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $barang_masuk['tanggal'] }}</td>
                        <td>{{ $barang_masuk['sumber_dana'] }}</td>
                        <td>{{ $barang_masuk['pemasok']->nama_pemasok }}</td>
                        <td>{{ $barang_masuk['karyawan']->nama_karyawan }}</td>
                        <td>@include('barang_masuk.action')</td> 
                    </tr>
                    @endforeach
                    </tbody>
        </table>
    </div>
</div>
<form action="" method="POST" id="deleteForm">
    @csrf
    @method('DELETE')
    <input type="submit" value="Hapus" style="display:none">
</form>
@endsection