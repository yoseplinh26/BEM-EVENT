<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\AcaraModel;
use Illuminate\Http\Request;
use App\Models\KategoriModel;
use Illuminate\Support\Facades\DB;

class AcaraController extends Controller
{
    //
    public function index(){

        $kategori = KategoriModel::get();
        $acara = DB::select(
            '
            select ta.*, tk.category_name
            from t_acara as ta
            left join (select * from t_kategori) as tk on tk.id = ta.category_id
            '
        );
        // var_dump($kategori);

        return view('admin.acara.index',
        [
            'kategori'=>$kategori, 
            'acara'=>$acara,
        ]


        );
    }

    public function store(Request $request){


        $data = [
            'tema'=>$request->input('tema'),
            'tanggal'=>$request->input('tanggal_acara'),
            'kuota'=>$request->input('kuota'),
            'deskripsi'=>$request->input('deskripsi'),
            'lokasi'=>$request->input('lokasi'),
            'category_id'=>$request->input('kategori')
        ];

        // var_dump($data);
        // return false;

        if(AcaraModel::create($data)){

            return back()->with('success', 'berhasil tambah acara');
        }

        return redirect('/admin/kategori');

    }

    public function destroy(Request $request){

        $idData =(request()->segments())[2]; 
        // var_dump($idData);

        DB::delete('delete from t_acara where id= ?',[$idData]);
 
        return redirect()->back()->withInput()->with('success', 'Berhasil hapus Data Acara');

    }
}
