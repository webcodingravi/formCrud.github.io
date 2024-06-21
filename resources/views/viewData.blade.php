@extends('layouts')
@section('contant')
<div class="container">
  <h1 class="text-center mb-5">All Data</h1>
  <div class="row">
    <div class="col-lg-8 mb-2">
      <a href="{{route('formcrud.index')}}"  class="btn btn-dark">Back</a>
    </div>



    <div class="col-lg-12">
      <table class="table table-striped table-bordered">
        <thead class="bg-dark text-white">
          <th>Name</th>
          <th>Skill</th>
          <th>image</th>
          <th>Country</th>
        </thead>
        <tbody>
          <tr>
            <td>{{$showData->name}}</td>
            <td>{{$showData->skill}}</td>
            <td><img src={{asset('/storage/'.$showData->image)}} alt="" class="img-fluid h-25" width="100 "></td>
            <td>{{$showData->country}}</td>
            
          </tr>
          
        </tbody>
      </table>

    </div>
  </div>
</div>
  
@endsection