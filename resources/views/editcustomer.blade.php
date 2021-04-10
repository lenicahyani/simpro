@extends('layouts.master')
@section('title','Laravel')
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
        <div class="card-body">
        <form action="{{ route('updatecustomer',$customer->id) }}" method="POST">
        <!-- closed request foldery -->
        @csrf
        @method('patch')
            <div class="alert alert-info">
                <b>Note!</b> Not all browsers support HTML5 type input.
            </div>
            <div class="form-group">
            <label @error('nama')
                    class="text-danger"
                @enderror>Nama @error('nama')
                    {{$message}}
                @enderror</label>
                <input type="text" name="nama" 
                @if(old('nama'))
                value= "{{ old('nama') }}" 
                    @else                
                    value= "{{ $customer->nama }}" 
                @endif
                class="form-control">
            </div>
            <div class="form-group">
            <label @error('email')
                    class="text-danger"
                @enderror>Email @error('email')
                    {{$message}}
                @enderror</label>
                <input type="email" name="email" 
                @if(old('email'))
                value= "{{ old('email') }}" 
                    @else                
                    value= "{{ $customer->email }}" 
                @endif
                class="form-control">
            </div>
            <div class="form-group">
            <label @error('alamat')
                    class="text-danger"
                @enderror>Alamat @error('alamat')
                    {{$message}}
                @enderror</label>
                <input type="text" name="alamat" 
                @if(old('alamat'))
                value= "{{ old('alamat') }}" 
                    @else                
                    value= "{{ $customer->alamat }}" 
                @endif
                class="form-control">
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
                    value= "{{ $customer->telepon }}" 
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
