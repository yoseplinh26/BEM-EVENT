@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="row">
                <article>
                    <!-- Post header-->
                    @foreach($events as $event)
                        <header class="mb-4">
                            <!-- Post title-->
                            <h1 class="fw-bolder mb-1">{{$event->name}}</h1>
                            <!-- Post meta content-->
                            <div class="text-muted fst-italic mb-2">Posted
                                on {{ date('d, D M y', strtotime($event->created_at))}}</div>
                            <!-- Post categories-->
                            <a class="badge bg-secondary text-decoration-none link-light"
                               href="#!">{{ date('d, D M y', strtotime($event->start_date))}}</a>
                            <a class="badge bg-info text-decoration-none link-light"
                               href="#!">{{ date('d,D M y', strtotime($event->end_date))}}</a>
                            <a class="badge bg-black text-decoration-none link-light"
                               href="#!">{{ $event->tickets->count()}}
                                Seats left</a>
                        </header>
                        <!-- Preview image figure-->
                        <figure class="mb-4"><img class="img-fluid rounded"
                                                  src="{{ asset('storage/'.$event->image) }}" alt="..."></figure>
                </article>
                <!-- Post content-->
                <div class="card-body">
                    <section class="mb-5">
                        <p class="fs-5 mb-4">{{$event->description}}</p>
                    </section>
                </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
