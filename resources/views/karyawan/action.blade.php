<a href="{{ route('karyawan.edit',$karyawan )}}" class="btn btn-primary btn-sm">
    <i class="fa fa-edit"></i>
</a>
<button class="btn btn-danger btn-sm"
onclick="confirmation(`{{ route(
'karyawan.destroy', $karyawan) }}`)">
    <i class="fa fa-trash"></i>
</button>