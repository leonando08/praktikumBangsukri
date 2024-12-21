<a href="{{ route('barang_masuk.edit',
 $barang_masuk) }}" class="btn btn-primary btn-sm">
    <i class="fa fa-edit"></i>
</a>
<button 
    class="btn btn-danger btn-sm"
    onclick="confirmation(`{{ route('barang_masuk.destroy',
     $barang_masuk) }}`)">
    <i class="fa fa-trash"></i>
</button>