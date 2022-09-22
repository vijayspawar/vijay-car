@extends('layouts.app')

@section('content')
<style>
  table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
}
</style>

<div class="container">
    <div class="row">
        <div class="col-sm-12 text-right text-bold">
          <a href="{{ route('cars.create') }}"> Add Car </a>
        </div>           
              
          <?php $i = 1;  ?>
          
            <table class="table">
              <thead >
                <tr>
                  <th>Sr. No.</th>
                  <th>Number</th>                   
                  <th>Owner</th>   
                  <th>Model</th>   
                  <th>Engine Type</th>
                  <th>Car Category</th>
                  <th>Desc</th>   
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach($cars as $key => $data)
                <tr>
                  <td>{{$i++}}</td>
                  <td>{{$data->number}}</td>    
                  <td>{{$data->owner->fullname}}</td>   
                  <td>{{$data->model}}</td>  
                  <td>{{$data->engine_type}}</td>
                  <td>{{$data->car_category}}</td> 
                  <td>{{$data->description}}</td>                                  
                  <td><a  href="{{ route('cars.edit',$data->id) }}">Edit </a></td>
                  
                </tr>
                @endforeach
              </tbody>
            </table>
</div>
</div>
         
@stop