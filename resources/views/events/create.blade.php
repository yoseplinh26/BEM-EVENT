@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6 margin-tb">
                <div>
                    <h2>Add New Events</h2>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Events name</label>
                            <input type="text" class="form-control" id="name" name="name"
                                  placeholder="Enter Event's name">
                        </div>
                        <div class="form-group">
                            <label for="description">Desc</label>
                            <textarea class="form-control" name="description" id="description"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="quota">Quota</label>
                            <input type="number" class="form-control" id="quota" name="quota"
                                   placeholder="seats quota">
                        </div>
                        <div class="form-group">
                            <label for="start_date">StartDate</label>
                            <input type="date" class="form-control" id="start_date" name="start_date">
                        </div>
                        <div class="form-group">
                            <label for="end_date">StartDate</label>
                            <input type="date" class="form-control" id="end_date" name="end_date">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="exampleFormControlFile1"></label>
                            <input type="file" class="form-control-file" id="image" name="image">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
