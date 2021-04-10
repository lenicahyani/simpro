@extends('layouts.master')
@section('title','Laravel')
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
        <div class="card-body">
        <form action="{{ route('simpancustomer') }}" method="POST">
        <!-- closed request foldery -->
        @csrf
            <div class="alert alert-info">
                <b>Note!</b> Not all browsers support HTML5 type input.
            </div>
            <div class="form-group">
                <label @error('nama')
                    class="text-danger"
                @enderror>Nama Customer @error('nama')
                    {{$message}}
                @enderror</label>
                <input type="text" name="nama" value= "{{ old('nama') }}" class="form-control">
            </div>
            <div class="form-group">
                <label @error('email')
                    class="text-danger"
                @enderror>Email @error('email')
                    {{$message}}
                @enderror</label>
                <input type="email"  value= "{{ old('email') }}" name="email" class="form-control">
            </div>
            <div class="form-group">
            <label @error('alamat')
                    class="text-danger"
                @enderror>Alamat @error('alamat')
                    {{$message}}
                @enderror</label>
                <input type="text" name="alamat"  value= "{{ old('alamat') }}" class="form-control">
            </div>      
            <div class="form-group">
                <label @error('telepon')
                    class="text-danger"
                @enderror>Telepon @error('telepon')
                    {{$message}}
                @enderror</label>
                <input type="text"  value= "{{ old('telepon') }}" name="telepon" class="form-control">
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
