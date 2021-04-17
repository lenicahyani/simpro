@extends('layouts.master')
@section('title','Laravel')
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <a href="" class="btn btn-icon icon-left btn-success"><i class="far fa-edit"></i> Tambah Data</a>
            <hr>   
            @if(session('message'))
            <div class="alert alert-primary  alert-dismissible show fade">
                <div class="alert-body">
                    <button class="close" data-dismiss="alert">
                        <span>×</span>
                    </button>
                    {{session('message')}}
                </div>
            </div>
            @endif         
            <table class="table table-stiped">
                <thead>
                <tr>
                <th>No</th>
			    <th>Kode Proyek</th>
                <th>Nama Proyek</th>
                <th>Anggota</th>
                <th>Nilai</th>          
			    <th>Tanggal Bayar</th>					
			    <th>Total Bayar</th> 
                </tr>  
                </thead>     
                <tbody>
                   
            
                            <a href="#" class="badge badge-primary">Edit</a>
                            <a href="#" class="badge  badge-danger swal-confirm">hapus</a>
                            
                        </td>                        
                    </tr>
                    
                </tbody>        
            </table>
          
        </div>
    </div>
</div>
@endsection
<!-- 
@push('page-scripts')
<script src="../node_modules/sweetalert/dist/sweetalert.min.js"></script> -->
@endpush

@push('after-scripts')
<!-- <script>
$(".swal-confirm").click(function(e) {
    id = e.target.dataset.id;
    swal({
        title: 'Yakin hapus data?',
        text: 'Data yang  dihapus tidak bisa di kembalikan',
        icon: 'warning',
        buttons: true,
        dangerMode: true,
    })
    .then((willDelete) => {
        if (willDelete) {
            // swal('Poof! Your imaginary file has been deleted!', {
            // icon: 'success',
            // });
            $(`#delete${id}`).submit();
        } else {
            // swal('Your imaginary file is safe!');
        }
    });
}); -->
</script>
@endpush