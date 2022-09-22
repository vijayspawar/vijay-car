@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12 text-center">    
            <label> <h2>Add Car<h2> </lable>
        </div>
    </div>
    <hr>    
    <form class="form-horizontal"  action="{{ route('cars.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
        
        <label class = "col-sm-3">Owner</label>
        <div class = "col-sm-3">
            <select class="form-control" name="owner_id"  >
                <option value="">Select Owner</option>
                @foreach($owner as $item)
                <option value="{{ $item->id }}"  {{ old('owner_id') == $item->id ? 'selected' : ''}}>{{ $item->fullname }}</option>
                @endforeach
            </select>
                @error('owner_id')
                <span >{{ $message }}</span>
                @enderror
        </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3">Number</label>
            <div class = "col-sm-3">
            <input class="form-control" type="text" value="{{ old('number') }}" name='number' id="exampleInputEmail1" placeholder="Enter  number">
             @error('number')
            <span >{{ $message }}</span>
            @enderror
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3">Model</label>
            <div class = "col-sm-3">
            <input class="form-control" type="text" value="{{ old('model') }}" name='model' id="exampleInputEmail1" placeholder="Enter  Model">
            @error('model')
                <span >{{ $message }}</span>
            @enderror
            </div>
        </div> 
        
        <div class="form-group">
            <label class="col-sm-3">Color</label>
            <div class = "col-sm-3">
            <input class="form-control" type="text" value="{{ old('color') }}" class="form-control"
           name='color' id="exampleInputEmail1" placeholder="Enter  Color">
            @error('color')
                <span >{{ $message }}</span>
            @enderror
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3">Engine Type</label>
            <div class = "col-sm-3">
            <input type="text" class="form-control" value="{{ old('engine_type') }}"  name='engine_type' id="exampleInputEmail1" placeholder="Enter  Engine Type">
            @error('engine_type')
                <span >{{ $message }}</span>
            @enderror
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3">Car Categories</label>
            <div class = "col-sm-3">
                <select class="form-control" name="car_category">
                <option value="">Select Categories</option>
                <option value="Repair">Repair</option>
                <option value="Servicing">Servicing</option>
                <option value="Ceramic Coating">Ceramic Coating</option>             
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3">Description</label>
            <div class = "col-sm-3">
            <textarea class="form-control" name='description'  required>{{old('description')}}</textarea>
                                            
                @error('description')
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
                                 
                                          
                                         
                                            
                               
                           
                        
                    





