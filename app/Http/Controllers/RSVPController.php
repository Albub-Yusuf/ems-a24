<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\RSVP;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RSVPController extends Controller
{
    public function index(){
     
        $data['serial'] = 1;
        $data['rsvpCounts'] = RSVP::with('event')->where('host_id',Auth::user()->id)->select(
            'event_id',
            DB::raw('count(*) as total_count'),
            DB::raw('count(CASE WHEN response = "attending" THEN 1 ELSE NULL END) as attending_count'),
            DB::raw('count(CASE WHEN response = "not_attending" THEN 1 ELSE NULL END) as not_attending_count'),
            DB::raw('count(CASE WHEN response = "maybe" THEN 1 ELSE NULL END) as maybe_count')
        )
        ->groupBy('event_id')->orderBy('id','DESC')
        ->get();
               
        return view('rsvp.index',$data);

       
  
    }

    public function getResponse($id){

        $data['eventDetails'] = Event::where('id',$id)->first();
        return view('rsvp.rsvp',$data);
    }

    public function responseUser(Request $request){
        
        RSVP::create([
            'response' => $request->rsvp,
            'event_id' => $request->eventId,
            'host_id' => $request->hostId,
            'guest_id' => 1
        ]);

        return back()->with('message','Response recorded successfully');
    }
}
