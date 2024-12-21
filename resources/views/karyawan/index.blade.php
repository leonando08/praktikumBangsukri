@extends('template.default')

@section('content')
    @if (session('success'))
        <div class="alert alert-primary" role="alert">
                {{ session('success') }}
        </div>
    @endif
    <div class="row">
        <div class="col-md-6">
            <h3>Karyawan</h3>
        </div>
        <div class="col-md-6">
            <a href="{{ route('karyawan.create') }}" class="btn btn-success btn-sm float-end">
                <i class="fa fa-plus-circle"></i> Tambah
            </a>
        </div>
        <div class="row mt-3">
            <div class="col">
                <table class="table bg-white rounded shadow-sm table-hover">
                    <thead>
                        <tr>
                            <th scope="col" width="50">#</th>
                            <th scope="col">Nama Karyawan</th>
                            <th scope="col">Nomor HP</th>
                            <th scope="col">Alamat</th>
                            <th style="width: 200px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($karyawans as $karyawan)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $karyawan['nama_karyawan'] }}</td>
                        <td>{{ $karyawan['nomor_hp'] }}</td>
                        <td>{{ $karyawan['alamat'] }}</td>
                        <td>
                            @include('karyawan.action')
                        </td> 
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