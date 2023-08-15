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
        <div class="card-body text-center">
            <div><h3 class="text-center">{{$eventDetails->title}}</h3></div><br>
            <div><b>category: {{$eventDetails->category->category}}</b></div><br>
            <div><p>{{$eventDetails->description}}</p></div><br>
            <div class="row">
                <div class="col-md-4"><b>Date: {{$eventDetails->date}}</b></div>
                <div class="col-md-4"><b>Time: {{$eventDetails->time}}</b></div>
                <div class="col-md-4"><b>Location: {{$eventDetails->location}}</b></div>
            </div>
            <br>
            <div><b>status: {{$eventDetails->status}}</b></div><br>
            <a class="text-primary" href="{{route('event.index')}}">Back</a>
        </div>
    </div>
    
    </div>

</div>

    </div>

@endsection