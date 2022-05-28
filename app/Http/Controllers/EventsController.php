<?php

namespace App\Http\Controllers;

use App\Models\Events;
use App\Models\Ticket;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Psy\Readline\Hoa\Event;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class EventsController extends Controller
{
    public function index()
    {
        $events = Events::with('tickets')->orderBy('event_id', 'DESC')->get();
        return view('events.index', compact('events'));
    }

    public function create() {
        return view('events.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'quota' => 'required',
            'start_date'=> 'required',
            'end_date' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $path = $request->file('image')->store('images');

        $events = Events::create([
            'name' => $request->name,
            'description' => $request->description,
            'quota' => $request->quota,
            'image' => $path,
            'start_date'=> Carbon::parse($request->start_date)->format('Y-m-d H:i:s'),
            'end_date' => Carbon::parse($request->end_date)->format('Y-m-d H:i:s'),
        ]);

        if ($events) {
            for ($i = 1; $i <= $events->quota; $i++) {
                $uuid = Uuid::uuid4()->getHex()->toString();
                $data =array("serial_key"=>$uuid,'event_id'=>$events->event_id,"seat_number"=>$i);

                DB::table('ticket')->insert($data);
            }
        }
        Alert::success('Congrats', 'Events Successfully Added');
        return redirect()->route('events.index');
    }

    public function destroy($id) {
        Events::where('event_id', $id)->forceDelete();
        Alert::success('Congrats', 'Events Successfully Deleted');
        return redirect()->route('events.index');
    }

    public function show($id) {
        $events = Events::with('tickets')->where('event_id', $id)->get();
        return view('events.view', compact('events'));
    }

    public function detail($event_id) {
        $user_id = Auth::user()->id;
        if (Ticket::where('user_id', $user_id )->where('event_id', $event_id)->exists()) {
            Alert::warning('Alert', 'Already Booked');
            return redirect()->back();
        } else {
            $tickets = Ticket::where('event_id', $event_id)->orderBy('seat_number', 'DESC')->get();
            return view('events.ticket', compact('tickets'));
        }
    }
}
