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
<div class="col-lg-8 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">RSVP List</h4>
                  <div class="table-responsive">
                    <table class="table table-hover" id="rsvp_list">
                      <thead>
                        <tr>
                          <th>Serial</th>
                          <th>Event</th>
                          <th>Total Response</th>
                          <th>Attending</th>
                          <th>Not Attending</th>
                          <th>Maybe</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($rsvpCounts as $rsvp)
                        <tr>
                          <td>{{$serial++}}</td>
                          <td>{{$rsvp->event->title}}</td>
                          <td>{{$rsvp->total_count}}</td>
                          <td>{{$rsvp->attending_count}}</td>
                          <td>{{$rsvp->not_attending_count}}</td>
                          <td>{{$rsvp->maybe_count}}</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
</div>


<script>
 $(function() {
   $('#rsvp_list').DataTable();
 });
</script>
@endsection