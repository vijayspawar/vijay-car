@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12 text-center">    
            <label> <h2>Add Owner<h2> </lable>
        </div>
    </div>
    <form class="form-horizontal" action="{{ route('owners.store') }}" method="POST" >
        @csrf
        <div class="form-group">        
        <label class = "col-sm-3">Full Name</label>
        <div class = "col-sm-3">
            <input class="form-control" type="text" value="{{ old('fullname') }}" name='fullname'  placeholder="Enter Full name">
            @error('fullname')
                <span >{{ $message }}</span>
            @enderror
        </div>
        </div>

        <div class="form-group">        
            <label class = "col-sm-3">Email</label>
            <div class = "col-sm-3">
                <input class="form-control" type="email" value="{{ old('email') }}" name='email'  placeholder="Enter email">
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="form-group">        
            <label class = "col-sm-3">Number</label>
            <div class = "col-sm-3">
            <input class="form-control" type="number" value="{{ old('number') }}" name='number' placeholder="Enter Number">
                @error('number')
                    <span >{{ $message }}</span>
                @enderror
            </div>
        </div>   
        
        <div class="form-group">        
            <label class = "col-sm-3">Address</label>
            <div class = "col-sm-3">
            <textarea class="form-control" name='address'  required>{{old('address')}}</textarea>                            
                @error('address')
                    <span >{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-4"></div>
            <div class="col-sm-3">
            <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
</form>
</div>



@endsection




