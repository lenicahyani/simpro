@extends('layouts.master')
@section('title','Laravel')
@section('content')

<div class="col-12 col-md-6 col-lg-6">
<div class="card">
    <div class="card-header"><h4>Upload Laporan</h4></div>
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                @if(session('suksesss'))
                <div class="alert alert-primary">
                {{session('suksesss')}}  
                </div>
                @endif
                <form action="{{ route('updatesubproyek', $subproyek->id) }}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}                   
                    <div class="form-group">
                        <label>Upload Link Drive</label>
                        <input name="upload" type="text" class="form-control @error('upload') is-invalid @enderror" value="{{old('upload')}}">                        
                    </div>                     
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

