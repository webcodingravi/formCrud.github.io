@extends('layouts')
@section('contant')
<div class="container">
  <h1 class="text-center">Update Data</h1>
  <div class="row mt-5">
    <div class="col-lg-8 mb-2">
   
    </div>
    <div class="col-lg-4 mb-2">
      <a href="{{route('formcrud.index')}}" style="margin-left: 22rem;" class="btn btn-info">Back</a>
    </div>
    <div class="col-lg-12">
      <div class="card p-4">
      <form action="{{route('formcrud.update', $editData->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mb-3">
        <label for="">Name</label>
         <input type="text" value="{{$editData->name}}" class="form-control" name="name" placeholder="Please Enter Your Name.." />
        </div>
    
        <div class="mb-3">
        <div class="form-check">
          <label for="">Html</label>
          <input type="checkbox" class="form-check-input" name="skill[]" value="html" {{in_array('html', explode(',', $editData->skill)) ? 'checked' : '' }}/>
         
          </div>

          <div class="form-check">
            <label for="">CSS</label>
            <input type="checkbox" class="form-check-input" name="skill[]" value="css" {{in_array('css', explode(',', $editData->skill)) ? 'checked' : '' }}/>
           
            </div>

            <div class="form-check">
              <label for="">Php</label>
              <input type="checkbox" class="form-check-input" name="skill[]" value="Php" {{in_array('Php', explode(',', $editData->skill)) ? 'checked' : '' }}/>
             
              </div>
        </div>


        <div class="mb-3">
            <img src="{{asset('/storage/'. $editData->image)}}" id="output" width="200" >
          </div>

          <div class="mb-3">
            <input type="file" class="form-control" onChange="document.querySelector('#output').src=window.URL.createObjectURL(this.files[0])" name="image" accept="image/*" />
            </div>

            <div class="mb-3">
              <select class="form-select" name="country">
                <option value="Delhi" {{$editData->country === 'Delhi' ? 'selected' : ''}}>Delhi</option>
                <option value="Uttar Pradesh" {{$editData->country === 'Uttar Pradesh' ? 'selected' : ''}}>Uttar Pradesh</option>
                <option value="Haryana" {{$editData->country === 'Haryana' ? 'selected' : ''}}>Haryana</option>
                <option value="Mumbai" {{$editData->country === 'Mumbai' ? 'selected' : ''}}>Mumbai</option>

              </select>
            </div>

            <button type="submit" class="btn btn-success">Submit</button>
      </form>
      </div>
    </div>
  </div>
</div>
  
@endsection