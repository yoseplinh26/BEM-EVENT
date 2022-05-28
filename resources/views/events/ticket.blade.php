@extends('layouts.app')
@section('content')

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Serial</th>
                        <th scope="col">Seat Number</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($tickets as $ticket)
                        <tr>
                            <td></td>
                            <td>{{$ticket->serial_key}}</td>
                            <td>{{$ticket->seat_number}}</td>

                            <td>
                                <form action="{{ route('ticket.booked', $ticket->serial_key) }}" method="POST">
                                    @csrf
                                    @method('POST')
                                    <button type="submit" class="btn btn-sm btn-success">Booking</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
