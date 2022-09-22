@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12 text-center">    
            <label> <h2>Edit Machanic<h2> </lable>
        </div>
    </div>

        <form class="form-horizontal" action="{{ route('mechanics.update', $mechanic->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-group">        
                <label class = "col-sm-3">Full Name</label>
                <div class = "col-sm-3">                                       
                    <input type="text" class="form-control" value="{{ $mechanic->name }}"  name='name'  placeholder="Enter fullname">
                    @error('name')
                    <span >{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group">        
                <label class = "col-sm-3">Email</label>
                <div class = "col-sm-3">
                <input type="email" class="form-control" value="{{ $owner->email }}" name='email' placeholder="Enter email">
                @error('email')
                <span >{{ $message }}</span>
                @enderror
                </div>
            </div>

            <div class="form-group">        
                <label class = "col-sm-3">Number</label>
                <div class = "col-sm-3">
                <input type="number" class="form-control" value="{{ $owner->number }}" name='number' placeholder="Enter Number">
                @error('number')
                    <span>{{ $message }}</span>
                @enderror
                </div>
            </div> 
            <div class="form-group">
                <div class="col-sm-4"></div>
                <div class="col-sm-3">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>
</div>                            
                        
@endsection
