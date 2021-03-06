@extends('layouts.master')
@section('title','Laravel')
@section('content')

<div class="col-12 col-md-6 col-lg-6">
<div class="card">
    <div class="card-header"><h4>Edit Proyek</h4></div>
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                @if(session('suksesss'))
                <div class="alert alert-primary">
                {{session('suksesss')}}  
                </div>
                @endif
                <form action="{{ route('updateupload', $subproyek->id) }}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}   
                    <label>Upload File</label>
                        <input name="upload" type="file" class="form-control" value="{{$subproyek->upload}}">                       
                    <div class="card-footer text-right">
                        <button  type="submit" class="btn btn-primary mr-1">Simpan</button>
                    </div>
                    <input type="hidden" name="id_kpro" id="id_kpro" value="{{$id}}">
                    </form>
                </div>    
            </div>
        </div>
    </div>
</div>

@endsection

@push('page-scripts')
@endpush

