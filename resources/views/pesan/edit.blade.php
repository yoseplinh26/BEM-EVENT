@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Event') }}</div>

                <div class="card-body">
                    @if (session('message'))
                    <div class="alert alert-success" role="alert">
                        {{ session('message') }}
                    </div>
                    @endif

                    <form method="POST" action='{{ route("pesans.update", $pesan->id) }}' enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        
                        <div class="form-group">
                            <input class="form-control" type="text" name="nama" placeholder="Nama Event" value="{{$pesan->nama}}">
                            @error('nama')
                            <label class="text-danger">{{ $message }}</label>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input class="form-control" type="text" name="tema" placeholder="Tema Event" value="{{$pesan->tema}}">
                            @error('tema')
                            <label class="text-danger">{{ $message }}</label>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input class="form-control" type="text" name="lokasi" placeholder="Lokasi" value="{{$pesan->lokasi}}">
                            @error('lokasi')
                            <label class="text-danger">{{ $message }}</label>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input class="form-control" type="numbering" name="kuota" placeholder="Kuota" value="{{$pesan->kuota}}">
                            @error('kuota')
                            <label class="text-danger">{{ $message }}</label>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input class="form-control" type="datetime" name="tanggal" placeholder="Tanggal" value="{{$pesan->tanggal}}">
                            @error('tanggal')
                            <label class="text-danger">{{ $message }}</label>
                            @enderror
                        </div>

                        <div class="form-group">
                            <strong>Pesan Image:</strong>
                             <input type="file" name="image" class="form-control" placeholder="Post Title">
                            @error('image')
                              <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                           @enderror
                        </div>
                        <div class="form-group">

                            <img src="{{ Storage::url($pesan->image) }}" height="200" width="200" alt="" />
              
              
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