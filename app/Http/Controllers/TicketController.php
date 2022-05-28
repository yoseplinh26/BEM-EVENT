<?php

namespace App\Http\Controllers;

use App\Models\Events;
use App\Models\Ticket;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class TicketController extends Controller
{
    public function index() {
        $user_id = Auth::user()->id;
        $ticket = Ticket::with('event')->where('user_id', $user_id)->get();
        return view('ticket.index', compact('ticket' ));
    }

    public function book($serial_key) {
        $user_id = Auth::user()->id;
        $ticket = Ticket::with('event')->where('serial_key',$serial_key)->first();
        $ticket->user_id = $user_id;

        $ticket->save();
        Alert::success('Congrats', 'Ticket Successfully Booked');

        $data["email"] = Auth::user()->email;
        $data["title"] = $ticket->event->name;
        $data["date"] = date('d ,D-M-y', strtotime($ticket->event->end_date));
        $data["serial"] = "Serial :".$ticket->serial_key;
        $data["seat_number"] = "Seat Number :". $ticket->seat_number;

        $pdf = PDF::loadView('ticket.email', $data);

        Mail::send('ticket.email', $data, function($message)use($data, $pdf) {
            $message->to($data["email"], $data["email"])
                ->subject($data["title"])
                ->attachData($pdf->output(), "ticket.pdf");
        });

        return redirect()->route('ticket.index');
    }
}
