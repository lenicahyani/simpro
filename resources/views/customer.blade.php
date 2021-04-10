@extends('layouts.master')
@section('title','Laravel')
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <a href="customer/add" class="btn btn-icon icon-left btn-success"><i class="far fa-edit"></i>+ Tambah Customer</a>
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
            <table class="table table-striped table-md">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Customer</th>
                    <th>Nama Anggota</th>
                    <th>Email</th>                    
                    <th>Alamat</th>
                    <th>Telepon</th>
                    <th>Action</th>
                </tr>  
                </thead>     
                <tbody>
                    @foreach ($customer as $no => $data)
                    <tr>
                        <td>{{$customer->firstItem()+$no}}</td>
                        <td>{{$data->nama}}</td>                        
                        <td>{{$data->email}}</td>
                        <td>{{$data->alamat}}</td>
                        <td>{{$data->telepon}}</td>
                        <td>
                            <a href="{{route('editcustomer',$data->id)}}" class="badge badge-primary">Edit</a>
                            <a href="#"  data-id="{{$data->id}}" class="badge  badge-danger swal-confirm">
                                <form action=" {{ route('deletecustomer',$data->id) }}" id="delete{{$data->id}}" method="POST">
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
            {{$customer->links()}}
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