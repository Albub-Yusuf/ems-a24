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

    <div class="col-md-10 ">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit Event</h4>
                  <p class="card-description">
                    Create Event
                  </p>
                  <form class="forms-sample" action="{{route('event.update',$eventDetails->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                      <label for="title" style="font-size:18px;"><b>Event Title:</b></label>
                      @error('title')
                    <label class="text-danger">{{ $message }}</label>
                    <br>
                    @enderror 
                      <input type="text" class="form-control" id="title" name="title" value="{{$eventDetails->title}}" placeholder="Enter event title..." style="font-size:18px;">
                    </div>  

                    <div class="form-group">
                      <label for="description" style="font-size:18px;"><b>Event Description:</b></label>
                      @error('description')
                    <label class="text-danger">{{ $message }}</label>
                    <br>
                    @enderror
                      <textarea rows="5" cols="30" class="form-control" id="description" name="description" placeholder="Enter event description..." style="font-size:18px;">{{$eventDetails->description}}</textarea>
                    </div>  
                   
                    <div class="row">
                        <div class="col-md-4">

                        <label for="date" style="font-size:18px;"><b>Event date:</b></label>
                        @error('date')
                    <label class="text-danger">{{ $message }}</label>
                    <br>
                    @enderror 
                    <div class="form-group">
                      <input type="date" class="form-control" id="date" name="date" value="{{$eventDetails->date}}" style="font-size:18px;" />
                    </div>  
                
                    
                    

                        </div>

                        <div class="col-md-3">

                        <label for="time" style="font-size:18px;"><b>Event time:</b></label>
                        @error('time')
                    <label class="text-danger">{{ $message }}</label>
                    <br>
                    @enderror
                    <div class="form-group">
                      <input type="time" class="form-control" id="time" name="time" value="{{$eventDetails->time}}" style="font-size:18px;" />
                    </div>  
                    

                        </div>

                        <div class="col-md-4">

                        <label for="location" style="font-size:18px;"><b>Event location:</b></label>
                        @error('location')
                    <label class="text-danger">{{ $message }}</label>
                    <br>
                    @enderror 
                    <div class="form-group">
                      <input type="text" class="form-control" id="time" name="location" value="{{$eventDetails->location}}" placeholder="Enter event location..." style="font-size:18px;" />
                    </div>  
                   

                        </div>
                    </div>

                    <div class="row">

                    <div class="col-md-6">
                    <label for="category" style="font-size:18px;"><b>Select Event Category:</b></label>
                    <div class="form-group" style="font-size: 18px; font-weight:700;">
                      <select class="form-control" id="category" name="category" style="font-size: 18px; font-weight:700;">
                        <option selected value="{{$eventDetails->category->id}}">{{$eventDetails->category->category}}</option>
                        @foreach($categories as $category)
                            <option style="font-size: 18px; font-weight:700;" value="{{$category->id}}">{{$category->category}}</option>
                        @endforeach
                      </select>
                    </div>  
                    @error('category')
                    <label class="text-danger">{{ $message }}</label>
                    <br>
                    @enderror  

                        </div>
                        <div class="col-md-6">


                            <!-- status select -->
                   
                    <label for="status" style="font-size:18px;"><b>Select Event status:</b></label>
                    <div class="form-group" style="font-size: 18px; font-weight:700;">
                      <select class="form-control" id="status" name="status" style="font-size: 18px; font-weight:700;">
                            <option style="font-size: 18px; font-weight:700;" value="upcoming">Upcoming</option>
                            <option style="font-size: 18px; font-weight:700;" value="ongoing">Ongoing</option>
                            <option style="font-size: 18px; font-weight:700;" value="finished">Finished</option>
                      
                      </select>
                    </div>  
                    @error('status')
                    <label class="text-danger">{{ $message }}</label>
                    <br>
                    @enderror 

                        </div>
                    </div>

                    <button type="submit" class="btn btn btn-primary mr-2">Add Event</button>
                  </form>
                  
                </div>
              </div>
            </div>

</div>

    </div>

@endsection