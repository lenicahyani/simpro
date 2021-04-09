@extends('layouts.master')
@section('title','Laravel')
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
        <div class="card-body">
        <form action="{{ route('updateworker',$worker->id) }}" method="POST">
        <!-- closed request foldery -->
        @csrf
        @method('patch')
            <div class="alert alert-info">
                <b>Note!</b> Not all browsers support HTML5 type input.
            </div>
            <div class="form-group">
                <label @error('kode_anggota')
                    class="text-danger"
                @enderror>Kode Anggota @error('kode_anggota')
                    {{$message}}
                @enderror</label>
                <input type="text" name="kode_anggota" 
                @if(old('kode_anggota'))
                value= "{{ old('kode_anggota') }}" 
                    @else                
                    value= "{{ $worker->kode_anggota }}" 
                @endif
                class="form-control">
            </div>
            <div class="form-group">
            <label @error('nama_anggota')
                    class="text-danger"
                @enderror>Nama Anggota @error('nama_anggota')
                    {{$message}}
                @enderror</label>
                <input type="text" name="nama_anggota"  value= "{{  $worker->nama_anggota  }}" class="form-control">
            </div>
            <div class="form-group"  >
                <label>Posisi</label>
                <select class="form-control" name="posisi" >
                <option>Frontand Web</option>
                <option>Backand Web</option>
                <option>UI/UX Web</option>
                <option>Frontand Android</option>
                <option>Backand Android</option>
                <option>UI/UX Android</option>
                </select>
            </div>
            
            <div class="form-group">
                <label @error('email')
                    class="text-danger"
                @enderror>Email @error('email')
                    {{$message}}
                @enderror</label>
                <input type="email"  value= "{{  $worker->email  }}" name="email" class="form-control">
            </div>
            <div class="form-group">
            <label @error('telepon')
                    class="text-danger"
                @enderror>Telepon @error('telepon')
                    {{$message}}
                @enderror</label>
                <input type="text" name="telepon" 
                @if(old('telepon'))
                value= "{{ old('telepon') }}" 
                    @else                
                    value= "{{ $worker->telepon }}" 
                @endif
                class="form-control">
            </div>
            </div>   
            <div class="card-footer text-right">
            <button class="btn btn-primary mr-1" type="submit">Submit</button>
            <button class="btn btn-secondary" type="reset">Reset</button>
            </div> 
        </form>             
        </div>
        </div>
    </div>
</div>
@endsection

@push('page-scripts')

@endpush
