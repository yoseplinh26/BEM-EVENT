<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
    //

    public function index(){
        
        $dataTransaksi = DB::select('
        select tu.name, tt.*, ta.tema,ta.lokasi, ta.tema
        from t_transaksi as tt
        left join (select * from users) as tu on tu.id = tt.user_id
        left join (select * from t_acara) as ta on ta.id = tt.acara_id
        ');

        // echo json_encode($dataTransaksi);

        // return false;
        return view('admin.transaksi.index');


    }


    // setelah klik approve 
    public function approval(){

        // misal si a beli 5 tiket di acara id_acara = 3
        //deklarasi data untuk data acara
        // select * from t_acara where id =  id_acara
        // akan di klik form modal menampilkan detail acara
        // di form modal terdapat data pembeli seperti nama dan jumlah beli tiket 
        // dan ada 5 inputan untuk mengisi nama peserta dan untuk kode bangku pake random string
        // ada button setujui dan batalkan
        // kondisi
        
        
        // a. ) kalo button setujui lakukan :
        // misal id acara = 3
        // cek tiket acara misal
        // select * from t_acara where id_acara=3
        // dapatkan kuotanya
        // setelah itu kurangi kuota dengan jumlah beli
        // hasil pengurangan tadi pake query ini
        
        // update t_acara set kuota = (hasil_pengurangan) where id_acara=3
        // simpan data bangku dan pake query ini kalau jumlahnya 5
        // update status transaksinya menjadi 'diterima'
        
        // loopingkan querynya sampe 5
        // insert into t_bangku (nomor_bangku, nama_peserta, acara_id, user_id) 
        // values((randon number 32 karakter),(nama yang di input textfield),(id acara yang ingin didatangkan),
        // (id siapa yang beli) )

        // b. ) kalo button batalkan lakukan :
        // update status transaksinya menjadi 'ditolak'






        
        



    }
}
