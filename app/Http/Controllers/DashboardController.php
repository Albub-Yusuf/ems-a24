<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Stevebauman\Location\Facades\Location;

class DashboardController extends Controller
{
    public function index(Request $request){

       
        $data['totalEvents'] = Event::all()->count();
        $data['totalCategories'] = Category::all()->count();
        $data['myCategories'] = Category::where('user_id',Auth::user()->id)->count();
        $data['myEvents'] = Event::where('user_id',Auth::user()->id)->count();
        return view('dashboard2',$data);
    }
}
