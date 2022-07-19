@extends('Admin.layout')

@section('content')

<div class="d-flex justify-content-between mb-3">
  <h5>settings</h5>
</div>
<div class="row">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">name</th>
        <th scope="col">email</th>
        <th scope="col">logo</th>
        <th scope="col">favicon</th>
        <th scope="col">city</th>
        <th scope="col">address</th>
        <th scope="col">phone</th>
        <th scope="col">map</th>
        <th scope="col">twitter</th>
        <th scope="col">instegram</th>
        <th scope="col">facebook</th>
        <th scope="col">actions</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($sett as $index=>$item)
        <tr>
            <th scope="row">{{$index+1}}</th>
          
            <td>{{$item->name}}</td>           
            <td>{{$item->email}}</td>
            <td>
              <img src="{{asset('uplouds/settings/' . $item->logo)}}" width="50px" alt="img">
            </td>
            <td>
              <img src="{{asset('uplouds/settings/' . $item->favicon)}}" width="50px" alt="img">
            </td>
            <td>{{$item->city}}</td>
            <td>{{$item->address}}</td>
            <td>{{$item->phone}}</td>
            <td>{{$item->map}}</td>
            <td>{{$item->twitter}}</td>
            <td>{{$item->insta}}</td>
            <td>{{$item->face}}</td>
            
            <td>
                <a class="btn btn-sm btn-info" href="{{route('Admin.settings.edit',$item->id)}}"><i class="fa-solid fa-pen-to-square"></i> edit</a>
                <a class="btn btn-sm btn-danger" href="{{route('Admin.settings.delete',$item->id)}}"><i class="fa-solid fa-trash-can"> </i> delete</a>
            </td>
          </tr>
        @endforeach     
               
    </tbody>   
  </table>


  
</div>

@endsection