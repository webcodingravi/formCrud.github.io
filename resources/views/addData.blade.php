@extends('layouts')
@section('contant')
<div class="container">
  <h1 class="text-center">Add Data</h1>
  <div class="row mt-5">

    <div class="col-lg-8 mb-2">
   
    </div>
    <div class="col-lg-4 mb-2">
      <a href="{{route('formcrud.index')}}" style="margin-left: 22rem;" class="btn btn-info">Back</a>
    </div>
    <div class="col-lg-12">
    <div class="card p-4">
      <form action="{{route('formcrud.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('post')
        <div class="mb-3">
        <label for="">Name</label>
         <input type="text" class="form-control" name="name" placeholder="Please Enter Your Name.." />
        </div>
    
        <div class="mb-3">
        <div class="form-check">
          <label for="">Html</label>
          <input type="checkbox" class="form-check-input" name="skill[]" value="html" />
         
          </div>

          <div class="form-check">
            <label for="">CSS</label>
            <input type="checkbox" class="form-check-input" name="skill[]" value="css" />
           
            </div>

            <div class="form-check">
              <label for="">Php</label>
              <input type="checkbox" class="form-check-input" name="skill[]" value="Php" />
             
              </div>
        </div>


        <div class="mb-3">
          <img src="" id="output" width="200" >
        </div>

          <div class="mb-3">
            <input type="file" class="form-control" onChange="document.querySelector('#output').src=window.URL.createObjectURL(this.files[0])" name="image" accept="image/*" />
            </div>

            <div class="mb-3">
              <select class="form-select" name="country">
                <option selected hidden>Please Select..</option>
                <option value="Delhi">Delhi</option>
                <option value="Uttar Pradesh">Uttar Pradesh</option>
                <option value="Haryana">Haryana</option>
                <option value="Mumbai">Mumbai</option>

              </select>
            </div>

            <button type="submit" class="btn btn-success">Submit</button>
      </form>
    </div>
    </div>
  </div>
</div>
@endsection