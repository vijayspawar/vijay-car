@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12 text-center">    
            <label> <h2>Add Machanics<h2> </lable>
        </div>
    </div>
   
        <form class="form-horizontal" action="{{ route('mechanics.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
                           
                <div class="form-group">        
                    <label class = "col-sm-3">Full Name</label>
                    <div class = "col-sm-3">                                           
                        <input class="form-control" type="text" value="{{ old('name') }}" name='name'  placeholder="Enter  name">
                            @error('name')
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
                    <div class="col-sm-4"></div>
                    <div class="col-sm-3">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>           
            </form>    
                            
@endsection




