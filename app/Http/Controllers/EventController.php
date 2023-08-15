<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    public function index(){
        $data['serial'] = 1;
        $data['events'] = Event::with('category')->where('user_id',Auth::user()->id)->get();
        return view('events.index',$data);
    }

    public function create(){

        $data['categories'] = Category::where('user_id',Auth::user()->id)->get();
        return view('events.create',$data);
    }

    public function store(Request $request){
       
        $request->validate([
            'title'=>'required',
            'description' => 'required',
            'date' => 'required',
            'time' => 'required',
            'location' => 'required',
            'category' => 'required',
            'status' => 'required'
        ]);

        Event::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'date'=>$request->date,
            'time'=>$request->time,
            'location'=>$request->location,
            'status' => $request->status,
            'category_id'=>$request->category,
            'user_id'=>Auth::user()->id
        ]);

        return back()->with('message','Event added successfully!');
    }

    public function show(Event $event){
        $data['eventDetails'] = Event::with('category','user')->where('user_id',Auth::user()->id)->where('id',$event->id)->first();
        $data['categories'] = Category::where('user_id',Auth::user()->id)->get();

        return view('events.details',$data);
    }

    public function edit(Event $event){

        $data['eventDetails'] = Event::with('category','user')->where('user_id',Auth::user()->id)->where('id',$event->id)->first();
        $data['categories'] = Category::where('user_id',Auth::user()->id)->get();

        return view('events.edit',$data);
    }

    public function update(Event $event, Request $request){

        $request->validate([
            'title'=>'required',
            'description' => 'required',
            'date' => 'required',
            'time' => 'required',
            'location' => 'required',
            'category' => 'required',
            'status' => 'required'
        ]);

        Event::where('user_id',Auth::user()->id)->where('id',$event->id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'date' => $request->date,
            'time' => $request->time,
            'location' => $request->location,
            'status' => $request->status,
            'category_id' => $request->category,
            'user_id' => Auth::user()->id
        ]);

        return redirect()->route('event.index')->with('message','Event updated successfully!');

    }

    public function destroy(Event $event){
        
        Event::where('user_id',Auth::user()->id)->where('id',$event->id)->delete();
        return back()->with('message','Event deleted successfully!');

    }
}
