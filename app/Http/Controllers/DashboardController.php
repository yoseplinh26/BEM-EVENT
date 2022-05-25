<?php

namespace App\Http\Controllers;
use App\Models\Pesan;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()

    {
        return view('admin.dashboard');
    }

    public function show()
    {
        $data['pesans'] = Pesan::orderBy('id','desc')->simplePaginate(5);

        // return view('beritas.index', ['data'=>$data])->with('i',(request()->input('page',1) - 1) * 5);

        return view('mahasiswa.events', $data);
    }
}
 

