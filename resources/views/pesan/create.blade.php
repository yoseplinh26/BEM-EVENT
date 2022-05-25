@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Event') }}</div>

                <div class="card-body">

                    @if (session('message'))
                    <div class="alert alert-success" role="alert">
                        {{ session('message') }}
                    </div>
                    @endif

                    <form method="POST" action='{{ route("pesans.store") }}' enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <input class="form-control" type="text" name="nama" placeholder="Nama Event">
                            @error('nama')
                            <label class="text-danger">{{ $message }}</label>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input class="form-control" type="text" name="tema" placeholder="Tema Event">
                            @error('tema')
                            <label class="text-danger">{{ $message }}</label>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input class="form-control" type="text" name="lokasi" placeholder="Lokasi">
                            @error('lokasi')
                            <label class="text-danger">{{ $message }}</label>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input class="form-control" type="numbering" name="kuota" placeholder="Kuota">
                            @error('kuota')
                            <label class="text-danger">{{ $message }}</label>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input class="form-control" type="date" name="tanggal" placeholder="Tanggal">
                            @error('tanggal')
                            <label class="text-danger">{{ $message }}</label>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                        <input type="file" name="image" class="form-control" placeholder="Post Title">
                        @error('image')
                         <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                         @enderror
                        </div>

                        <div class="form-group">
                            <a class="btn btn-danger mr-1" href='{{ route("pesans.index") }}' type="submit">Cancel</a>
                            <button class="btn btn-success" type="submit">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection