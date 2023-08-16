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
            <br><br><hr><br><br>
            <form action="{{route('response')}}" method="POST">
                @csrf
                @method('POST')
               <div class="form-group" style="font-size: 18px; font-weight:700;">
               <label for="rsvp" style="font-size: 18px; font-weight:700;"><b>Are you interested to attend this event?</b></label>
                <br>
                <input type="hidden" name="eventId" value="{{$eventDetails->id}}">
                <input type="hidden" name="hostId" value="{{$eventDetails->user_id}}">
                <select class="form-control" id="rsvp" name="rsvp" style="font-size: 18px; font-weight:700;">
                            <option style="font-size: 18px; font-weight:700;" value="attending">Attending</option>
                            <option style="font-size: 18px; font-weight:700;" value="not_attending">Not Attending</option>
                            <option style="font-size: 18px; font-weight:700;" value="maybe">Maybe</option>
                      
                </select>
                <br>
                <input style="font-size: 18px; font-weight:700;" type="submit" value="submit" class="btn btn-inverse-primary"/>
               </div>
            </form>
        </div>
    </div>
    
    </div>

</div>

    </div>

@endsection