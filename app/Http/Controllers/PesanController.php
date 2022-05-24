<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesan;
use Exception;


class PesanController extends Controller
{
    public function index()
    {
        $data['pesans'] = Pesan::latest()->get();
        return view('pesan.index', $data);
    }

    public function create()
    {
        return view('pesan.create');
    }

    public function store(Request $request)
    {
        try{
            $pesan = Pesan::create($request->all());

            $notification = array(
                'message' => 'Event Berhasil Ditambahkan!',
                'alert-type' => 'success'
            );

            return redirect()->route('pesans.index')->with($notification);

        } catch (Exception $e) {
            $notification = array(
                'message' => $e->getMessage(),
                'alert-type' => 'error'
            );

            return redirect()->route('pesans.index')->with($notification);
        }
    }

    public function show(Pesan $pesan)
    {
        //
    }

    public function edit(Pesan $pesan)
    {
        $data['pesan'] = $pesan;
        return view('pesan.edit', $data);
    }

    public function update(Request $request, Pesan $pesan)
    {
        try {
            $pesan = $pesan->update($request->all());

            $notification = array(
                'message' => 'Event Berhasil Disimpan!',
                'alert-type' => 'success'
            );

            return redirect()->route('pesans.index')->with($notification);
        } catch (Exception $e) {
            $notification = array(
                'message' => $e->getMessage(),
                'alert-type' => 'error'
            );
            return redirect()->route('pesans.index')->with($notification);
        }
    }

    public function destroy(Pesan $pesan)
    {
        try{
            Pesan::find($pesan->id)->delete();

            $notification = array(
                'message' => 'Event Berhasil Dihapus!',
                'alert-type' => 'success'
            );

            return redirect()->route('pesans.index')->with($notification);
        } catch (Exception $e) {
            $notification = array(
                'message' => $e->getMessage(),
                'alert-type' => 'error'
            );
            return redirect()->route('pesans.index')->with($notification);
        }
    }
}
