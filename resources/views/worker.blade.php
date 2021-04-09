@extends('layouts.master')
@section('title','Laravel')
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <a href="worker/add" class="btn btn-icon icon-left btn-success"><i class="far fa-edit"></i> Tambah Anggota</a>
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
                    <th>Kode Anggota</th>
                    <th>Nama Anggota</th>
                    <th>Posisi</th>
                    <th>Email</th>
                    <th>Telepon</th>
                    <th>Action</th>
                </tr>  
                </thead>     
                <tbody>
                    @foreach ($worker as $no => $data)
                    <tr>
                        <td>{{$worker->firstItem()+$no}}</td>
                        <td>{{$data->kode_anggota}}</td>
                        <td>{{$data->nama_anggota}}</td>
                        <td>{{$data->posisi}}</td>
                        <td>{{$data->email}}</td>
                        <td>{{$data->telepon}}</td>
                        <td>
                            <a href="{{route('editworker',$data->id)}}" class="badge badge-primary">Edit</a>
                            <a href="#"  data-id="{{$data->id}}" class="badge  badge-danger swal-confirm">
                                <form action=" {{ route('deleteworker',$data->id) }}" id="delete{{$data->id}}" method="POST">
                                @csrf
                                @method('delete')
                                </form>                                
                                Delete
                            </a>
                        </td>                        
                    </tr>
                    @endforeach
                </tbody>        
            </table>
            {{$worker->links()}}
        </div>
    </div>
</div>
@endsection

@push('page-scripts')
<script src="../node_modules/sweetalert/dist/sweetalert.min.js"></script>
@endpush

@push('after-scripts')
<script>
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
});
</script>
@endpush