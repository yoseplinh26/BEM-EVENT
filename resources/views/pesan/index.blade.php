@extends('admin.layout.main')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Event') }}</div>

                <div class="card-body">
                    @if (session('message'))
                    <div class="alert alert-success" role="alert">
                        {{ session('message') }}
                    </div>
                    @endif

                    <p><a class="btn btn-success" href='{{ route("pesans.create") }}'><i class="fa fa-plus"></i> Create Event</a></p>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>
                                   Nama Event
                                </th>
                                <th>
                                   Tema Event
                                </th>
                                <th>
                                    Lokasi
                                 </th>
                                 <th>
                                    Jumlah Kuota
                                 </th>
                                 <th>
                                    Tanggal
                                 </th>
                                 <th>
                                    Gambar
                                 </th>

                                <th width="30px"> 
                                    Actions 
                                </th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($pesans as $pesan)
                            <tr>
                                <td>
                                    {{ $pesan->nama  }}
                                </td>
                                <td>
                                    {{ $pesan->tema }}
                                </td>
                                <td>
                                    {{ $pesan->lokasi  }}
                                </td>
                                <td>
                                    {{ $pesan->kuota }}
                                </td>
                                <td>
                                    {{ $pesan->tanggal }}
                                </td>
                                <td><img src="{{ Storage::url($pesan->image) }}" height="75" width="75" alt="" /></td>
                                <td>
                                    <a class="btn btn-success d-block mb-2" href='{{ route("pesans.edit", $pesan->id) }}'><i class="fa fa-pencil"></i> Edit</a>

                                    <form method="POST" action="{{ route('pesans.destroy', $pesan->id) }}">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                        <div class="form-group">
                                            <i class="fa fa-times"></i>
                                            <input type="submit" class="btn btn-danger d-block" value="Delete">
                                        </div>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="3" textalign="center">No records found!</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection