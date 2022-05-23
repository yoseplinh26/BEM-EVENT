<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\KategoriModel;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    //

    public function index(){

        $kategori = KategoriModel::get();

        // var_dump($kategori);
        // return false;

        return view('admin.categories.index',[
            'kategori'=>$kategori
        ]);

    }

    public function store(Request $request){

            // $request->input('tema');
            // $request->input('nama_kategori');

        $data=[
            'category_name'=>$request->input('nama_kategori')
        ];

        if(KategoriModel::create($data)){

            return back()->with('success', 'berhasil tambah kategori');
        }

        return redirect('/admin/kategori');

    }
}
