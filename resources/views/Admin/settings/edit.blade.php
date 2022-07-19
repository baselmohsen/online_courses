@extends('Admin.layout')
@section('content')

<div class="container m-5 p-5">

  <div class="d-flex justify-content-between mb-3">
      <h5>edit settings</h5>
      <a class="btn btn-sm btn-primary" href="{{route('Admin.settings')}}"> back</a>
    </div>

  @include('Admin.inc.errors')

  <form action="{{route('Admin.settings.update')}}" method="POST" enctype="multipart/form-data">
      @csrf
       <input type="hidden" name="id" value="{{$settings->id}}">
      <div class="form-group">
        <input type="text" class="form-control" value="{{$settings->name}}" name="name" placeholder="Enter name">
      </div>

      <div class="form-group">
        <input type="text" class="form-control" value="{{$settings->email}}" name="email" placeholder="Enter email">
      </div>

      <div class="form-group">
        <input type="text" class="form-control" value="{{$settings->address}}" name="address" placeholder="Enter address">
      </div>

      <div class="form-group">
        <input type="url" class="form-control" value="{{$settings->map}}" name="map" placeholder="Enter map">
      </div>




      <div class="form-group">
        <input type="text" class="form-control" value="{{$settings->phone}}" name="phone" placeholder="Enter phone">
      </div>

      <div class="form-group">
        <input type="text" class="form-control" value="{{$settings->work_hours}}" name="work_hours" placeholder="Enter work_hours">
      </div>

      <div class="form-group">
        <input type="url" class="form-control" value="{{$settings->twitter}}" name="twitter" placeholder="Enter twitter">
      </div>

      <div class="form-group">
        <input type="url" class="form-control" value="{{$settings->insta}}" name="insta" placeholder="Enter instagram">
      </div>
      <div class="form-group">
        <input type="url" class="form-control" value="{{$settings->face}}" name="face" placeholder="Enter facebook">
      </div>

      <div class="form-group">
        <input type="file"  class="form-control-file "  name="logo" placeholder="Enter logo">
      </div>
     
      <div class="form-group">
        <label for="logo">logo</label>

        <img src="{{asset('uplouds/settings/' . $settings->logo)}}"    width="50px" porder="" alt="" >
      </div>
    

      <div class="form-group">
        <input type="file"   class="form-control-file "  name="favicon" >
      </div>

      <div class="form-group">
        <label for="logo">favicon</label>

        <img src="{{asset('uplouds/settings/' . $settings->favicon)}}"    width="50px" porder="" alt="" >
      </div>

 
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>
  
    
@endsection