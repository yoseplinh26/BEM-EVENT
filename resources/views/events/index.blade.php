@extends('layouts.app')
@section('content')

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                @if(Auth::user()->roles === "admin")
                <a href="{{route('events.create')}}" @class('btn btn-md btn-success')>Add Event</a>
                @endif
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Seat Quota</th>
                        <th scope="col">Remaining Quota</th>
                        <th scope="col"> End Date</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($events as $event)
                    <tr>
                        <th scope="row">{{$event->event_id}}</th>
                        <td>{{$event->name}}</td>
                        <td>{{$event->quota}} Seats</td>
                        <td>{{$event->tickets->count()}} Seats</td>
                        <td>{{ date('d-M-y', strtotime($event->end_date)) }}</td>
                        <td width="10px">
                            @if($event->tickets->count() === 0 or $event->end_date < Carbon\Carbon::now())
                                <p @class('bg-danger text-white rounded') style="padding: 2px;">
                                    Closed
                                </p>
                            @else
                                    <p @class('bg-success text-white')>
                                        Open
                                    </p>
                            @endif
                        </td>
                        @if(Auth::user()->roles === "admin")
                        <td>
                            <a href="{{route('events.show', ['event'=>$event])}}" @class('btn btn-sm btn-primary') style="margin-bottom: 10px;">View</a>
                            <form onsubmit="return confirm('Are you sure ?');"
                                  action="{{ route('events.destroy', $event->event_id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                        @else
                        <td>
                            <a href="{{route('events.ticket', ['event_id'=>$event->event_id])}}" @class('btn btn-sm btn-primary') style="margin-bottom: 10px;">Ticket Book</a>
                        </td>
                        @endif
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

