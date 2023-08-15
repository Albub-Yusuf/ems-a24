@extends('layouts.dashMaster')

@section('content')


@if(Session::has('message'))

 <script>
 Swal.fire({
  icon: 'success',
  title: "{{Session::get('message')}}",
  

})
 </script>

@endif


<div class="row" style="min-height: 75vh;">

<div class="col-md-6 ">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add Category</h4>
                  <p class="card-description">
                    Create Event Category
                  </p>
                  <form class="forms-sample" action="{{route('category.store')}}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="form-group">
                      <label for="category" style="font-size:18px;"><b>Category Name:</b></label>
                      <input type="text" class="form-control text-lg" id="category" name="category" placeholder="Enter category name..." style="font-size:18px;">
                    </div>  
                    @error('category')
                    <label class="text-danger">{{ $message }}</label>
                    <br>
                    @enderror        
                    <button type="submit" class="btn btn-primary mr-2">Add Category</button>
                  </form>
                  
                </div>
              </div>
            </div>

</div>

@endsection