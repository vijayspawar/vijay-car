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
              <a href="{{ route('owners.create') }}"> Add Owner </a>
              </div>
            <table class="table">
              <thead>
                <tr>                 
                  <th>Name</th>
                  <th>Email</th> 
                  <th>Number</th> 
                  <th>Address</th> 
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach($owners as $key => $data)
                <tr>                
                  <td>{{$data->fullname}}</td>
                  <td>{{$data->email}}</td>   
                  <td>{{$data->number}}</td>   
                  <td>{{$data->address}}</td>               
                  <td><a  href="{{ route('owners.edit',$data->id) }}">Edit </a></td>
                  
                </tr>
                @endforeach
              </tbody>
            </table>
</div>
</div>          
@endsection
