@extends('layouts.master')
@section('title','Laravel')
@section('content')

<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
        @if(session('sukses'))
        <div class="alert alert-primary">
           {{session('sukses')}}
        </div>
        @endif
            <a href="customer/add" class="btn btn-icon icon-left btn-success"><i class="far fa-edit"></i>Tambah Customer</a>            
            <table class="table table-striped table-md">
                <tr>
                    <!-- <th>No</th> -->
                    <th>Nama Customer</th>
                    <th>Email</th> 
                    <th>Telepon</th>  
                    <th>Alamat</th>       
                    <th>Action</th>
                </tr>  
                @foreach($data_customer as $customer)
                <tr>                   
                    <td>{{$customer->nama_customer}}</td>                    
                    <td>{{$customer->email}}</td>
                    <td>{{$customer->telepon}}</td>                    
                    <td>{{$customer->alamat}}</td>
                    <td><a href="/customer/{{$customer->id}}/edit" class="badge badge-warning">Edit</a></td>
                    <td><a href="/customer/{{$customer->id}}/delete" class="badge badge-danger" onclick="return confirm('Yakin Hapus?')">Hapus</a></td>
                </tr>
                @endforeach
            </table>
            <div class ="card-footer">
                {{$data_customer ->links()}}
            </div>
        </div>
    </div>
</div>

@endsection

@push('page-scripts')
@endpush

