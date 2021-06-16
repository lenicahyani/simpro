@extends('layouts.master')
@section('title','Laravel')
@section('content')

<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
        @if(session('sukses'))
        <div class="alert alert-success">
           {{session('sukses')}}
        </div>
        @endif
        
            <table class="table table-striped table-md">
                <tr>
                    <!-- <th>No</th> -->
                    <th>Nama Proyek</th> 
                    <th>Harga Proyek</th>        
                    <th>Pimpinan Proyek</th>     
                    <th>Action</th>
                </tr>  
                @foreach($proyek as $proyek)
                <tr>
                    <td>{{$proyek->nama_proyek}}</td>                    
                    <td>{{$proyek->nilai_proyek}}</td>
                    <td>{{$proyek->pimpinan_proyek}}</td>
                    <td><a href="/indexgaji/{{$proyek->id}}/detailgaji" class="badge badge-success">Detail</a></td> 
                    
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>

@endsection

@push('page-scripts')
@endpush

