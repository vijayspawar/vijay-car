@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12 text-center">    
            <label> <h2>Edit Machanic Cars<h2> </lable>
        </div>
    </div>
      
        <form class="form-horizontal" action="{{ route('assignMechanic.update', $mechanicCars->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-group">        
            <label class = "col-sm-3">Owner</label>
            <div class = "col-sm-3"> 
            <select class="form-control" name="owner_id"  >
                <option value="">Select Owner</option>
                @foreach($owner as $item)
                <option value="{{ $item->id }}"  {{  $mechanicCars->owner_id == $item->id ? 'selected' : ''}}>{{ $item->fullname }}</option>
                @endforeach
            </select>
                @error('owner_id')
                <span >{{ $message }}</span>
                @enderror
            </div>
            </div>

            <div class="form-group">        
            <label class = "col-sm-3">Machanic</label>
            <div class = "col-sm-3"> 
            <select class="form-control" name="mechanic_id"  >
                <option value="">Select Owner</option>
                @foreach($mechanic as $item)
                <option value="{{ $item->id }}"  {{  $mechanicCars->mechanic_id == $item->id ? 'selected' : ''}}>{{ $item->name }}</option>
                @endforeach
            </select>
                @error('mechanic_id')
                <span >{{ $message }}</span>
                @enderror
            </div>
            </div>
            <div class="form-group">
            <label class="col-sm-3">Car Categories</label>
            <div class = "col-sm-3">
                <select class="form-control" name="category" >
                <option value="">Select Categories</option>
                <option value="Repair" {{  $mechanicCars->category == "Repair" ? 'selected' : ''}}>Repair</option>
                <option value="Servicing" {{  $mechanicCars->category == "Servicing" ? 'selected' : ''}}>Servicing</option>
                <option value="Ceramic Coating"  {{  $mechanicCars->category == "Ceramic Coating" ? 'selected' : ''}}>Ceramic Coating</option>             
                </select>
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
