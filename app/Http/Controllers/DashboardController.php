<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Event;
use App\Models\RSVP;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Stevebauman\Location\Facades\Location;

class DashboardController extends Controller
{
    public function index(Request $request){

       
        $data['totalEvents'] = Event::all()->count();
        $data['totalCategories'] = Category::all()->count();
        $data['myCategories'] = Category::where('user_id',Auth::user()->id)->count();
        $data['myEvents'] = Event::where('user_id',Auth::user()->id)->count();
        $data['totalRSVP'] = RSVP::where('host_id',Auth::user()->id)->count();

        $data['rsvpCounts'] = RSVP::with('event')->where('host_id',Auth::user()->id)->select(
            'event_id',
            DB::raw('count(*) as total_count')
        )->groupBy('event_id')->limit(7)->orderBy('id','DESC')->get();
        $data['totalAttendingGuest'] = RSVP::where('host_id',Auth::user()->id)->where('response','attending')->count();
        
        return view('dashboard2',$data);
    }
}
