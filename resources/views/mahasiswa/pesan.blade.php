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
            <a class="btn btn-danger mr-1" href='{{ route("pesans.index") }}' type="submit">Cancel</a>
            <button class="btn btn-success" type="submit">Save</button>
        </div>
    </form>
</div>