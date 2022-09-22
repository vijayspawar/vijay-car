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
              <a href="{{ route('assignMechanic.create') }}"> Assign Mechanics </a>
          </div>
          <?php $i = 1;?>
            <table class="table">
              <thead >
                <tr>
                  <th>Sr. No.</th>
                  <th>Owner Name</th> 
                  <th>Mechanic Name</th>
                  <th>Category</th>                            
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach($mechaniccars as $key => $data)
                <tr>
                  <td>{{$i++}}</td>
                  <td>{{$data->owner->fullname}}</td> 
                  <td>{{$data->mechanic->name}}</td>
                  <td>{{$data->category}}</td>

                  

                  <td><a  href="{{ route('assignMechanic.edit',$data->id) }}"> Edit </a></td>
                  
                </tr>
                @endforeach
              </tbody>
            </table>
</div>
</div>     
@stop