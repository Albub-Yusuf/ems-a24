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
        <div class="card-title text-center">
            <h3>{{$eventDetails->title}}</h3>
        </div>
        <div class="card-body text-center">
            <div class="form-control">{{$eventDetails->title}}</div><br>
            <div class="form-control">{{$eventDetails->description}}</div><br>
            <div class="form-control">{{$eventDetails->date}}</div><br>
            <div class="form-control">{{$eventDetails->time}}</div><br>
            <div class="form-control">{{$eventDetails->location}}</div><br>
            <div class="form-control">{{$eventDetails->category->category}}</div><br>
            <div class="form-control">{{$eventDetails->status}}</div><br>
            <a class="btn btn-primary" href="{{route('event.index')}}">Back</a>
        </div>
    </div>
    
    </div>

</div>

    </div>

@endsection