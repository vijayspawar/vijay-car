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
              <a href="{{ route('mechanics.create') }}"> Add Mechanics </a>
          </div>
          <?php $i = 1;?>
            <table class="table">
              <thead >
                <tr>
                  <th>Sr. No.</th>
                  <th>Name</th> 
                  <th>Mobile Number</th>
                  <th>Email</th>                            
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach($mechanics as $key => $data)
                <tr>
                  <td>{{$i++}}</td>
                  <td>{{$data->name}}</td> 
                  <td>{{$data->number}}</td>
                  <td>{{$data->email}}</td>

                  <td><a  href="{{ route('mechanics.edit',$data->id) }}"> Edit </a></td>
                  
                </tr>
                @endforeach
              </tbody>
            </table>
</div>
</div>     
@stop