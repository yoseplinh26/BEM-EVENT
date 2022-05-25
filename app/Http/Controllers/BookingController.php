<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookingModel;
use App\Models\TransaksiModel;

class BookingController extends Controller
{
    //

    public function index(){
        return view('mahasiswa.index');
    }

    public function store(Request $request){
        // var_dump($request->input('user_id'));
        // var_dump($request->input('acara_id'));
        // var_dump($request->input('jumlah'));

        $data  = [
            'user_id'=>$request->input('user_id'),
            'acara_id'=>$request->input('acara_id'),
            'jumlah_tiket'=>$request->input('jumlah'),
            'status'=>'proses'
        ];

        
        if(TransaksiModel::create($data)){
            return 'berhasil';
        }else{
            return 'gagal';
        }

        return back()->with('berhasil booking');

        
    }
    public function tiket()
    {
        // return view('tiket', [
        //     'title' => 'Tiket',
        //     // 'active' => 'index'
        // ]);
        return view('mahasiswa.tiket', ['title' => 'Tiket']);
    }
    public function events()
    { 
        // return view('events', [
        //     'title' => 'Events',
        //     // 'active' => 'index' 
        // ]);
        return view('mahasiswa.events');
    }
    public function team()
    {
        // return view('team', [
        //     'title' => 'Team',
        //     // 'active' => 'index'
        // ]);

        return view('mahasiswa.team', ['title' => 'Team']);

    }
    public function create()
    {
        return view('mahasiswa.pesan');
    }

    public function buat(Request $request)
    {
        try{
            $pesan = Pesan::create($request->all());

            $notification = array(
                'message' => 'Event Berhasil Ditambahkan!',
                'alert-type' => 'success'
            );

            return redirect()->route('pesan')->with($notification);

        } catch (Exception $e) {
            $notification = array(
                'message' => $e->getMessage(),
                'alert-type' => 'error'
            );

            return redirect()->route('pesan')->with($notification);
        }
    }
}
