@extends('layouts.app')
@section('content')

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th scope="col">Serial</th>
                        <th scope="col">Seat Number</th>
                        <th scope="col">Event</th>
                        <th scope="col">Time</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($ticket as $t)
                        <tr>
                            <td>{{$t->serial_key}}</td>
                            <td>{{$t->seat_number}}</td>
                            <td><b>{{$t->event->name}}</b></td>
                            <td>{{ date('d-M-y', strtotime($t->event->end_date)) }}</td>
                            <td><a href="{{route('events.show', ['event'=>$t->event])}}" @class('btn btn-sm btn-primary') style="margin-bottom: 10px;">View Event</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

