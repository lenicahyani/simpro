@extends('layouts.master')
@section('title','Laravel')
@section('content')

<div class="section-body">
<div class="card">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
        @if(session('sukses'))
        <div class="alert alert-success">
           {{session('sukses')}}
        </div>
        @endif
        <div class="col-12 col-md-12 col-lg-12">
        @if(session('update'))
        <div class="alert alert-primary">
           {{session('update')}}
        </div>
        @endif
        @if(session('hapus'))
        <div class="alert alert-danger">
           {{session('hapus')}}
        </div>
        @endif
            <a href="worker/add" class="btn btn-icon icon-left btn-success"><i class="far fa-edit"></i>Tambah Worker</a>            
            <table class="table table-striped table-md">
                <tr>
                    <!-- <th>No</th> -->
                    <th>No</th>  
                    <th>Nama Worker</th>                     
                    <th>Alamat</th>   
                    <th>Status</th>  
                    <th>Email</th> 
                    <th>Telepon</th>      
                    <th colspan=2>Action</th>
                </tr>  
                @foreach($data_worker as $no=>$worker)
                <tr>                   
                    <td>{{++$no + ($data_worker->currentPage()-1) * $data_worker->perPage()}}</td>
                    <td>{{$worker->nama_worker}}</td>                      
                    <td>{{$worker->alamat}}</td> 
                    <td>{{$worker->status}}</td>                  
                    <td>{{$worker->email}}</td>
                    <td>{{$worker->telepon}}</td>
                    <td><a href="/worker/{{$worker->id}}/edit" class="badge badge-warning">Edit</a></td>
                    <td><a href="/worker/{{$worker->id}}/delete" class="badge badge-danger" onclick="return confirm('Yakin Hapus?')">Hapus</a></td>
                </tr>
                @endforeach
            </table>
            <div class="card-footer">
                {{$data_worker->links()}}
            </div>            
        </div>
    </div>
    </div>
</div>

@endsection

@push('page-scripts')
@endpush

