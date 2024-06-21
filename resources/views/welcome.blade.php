@extends('layouts')
@section('contant')
<div class="container">
  <h1 class="text-center mb-5">All Data</h1>
  <div class="row">
    <div class="alert-box" id="alert-box">
    @if (session('status'))
       <div class="alert alert-success">
          {{session('status')}}
       </div>
    @endif
      </div>
    <div class="col-lg-8 mb-2">
      <a href="{{route('formcrud.create')}}" class="btn btn-success text-white">Add Data</a>
    </div>

    <div class="col-lg-4 mb-2">
      <form action="{{route('search_trem')}}" method="">
        <div class="d-flex">
    <input type="search" class="form-control me-2" name="search" placeholder="search.." />
    <button class="btn btn-success">Search</button>
  </div>
      </form>
    </div>

    <div class="col-lg-12">
      <table class="table table-striped table-bordered">
        <thead class="bg-success text-white">
          <th>S.No.</th>
          <th>Name</th>
          <th>Skill</th>
          <th>image</th>
          <th>Country</th>
          <th>Action</th>

        </thead>
        <tbody>
          @php
            $serial = 1;
          @endphp
          @foreach ($formcrud as $form)
          <tr>
            <td>{{$serial++ }}</td>
            <td>{{$form->name}}</td>
            <td>{{$form->skill}}</td>
            <td><img src={{asset('/storage/'.$form->image)}} alt="" class="img-fluid h-25" width="100 "></td>
            <td>{{$form->country}}</td>
            <td>
              <div class="d-flex">
             <a href="{{route('formcrud.show',$form->id)}}" class="btn btn-info text-white btn-sm me-2">View</a>
             <a href="{{route('formcrud.edit',$form->id)}}" class="btn btn-warning btn-sm me-2">Update</a>

             <form action="{{route('formcrud.destroy', $form->id)}}" method="post">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger btn-sm text-white">Delete</button>
             </form>
            </td>
          </div>
          </tr>
          @endforeach
        </tbody>
      </table>
      <div class="pagination-section">
          {{$formcrud->links('pagination::bootstrap-5')}}
      </div>
    </div>
  </div>
</div>
  
@endsection



@section('script')
<script>
  setTimeout(() => {
    $('#alert-box').fadeOut('slow')
  }, 1500);
</script>
  
@endsection