<?php
  
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Pesan;
use Exception;
  
class PesanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['pesans'] = Pesan::orderBy('id','desc')->paginate(5);
    
        return view('pesan.index', $data);
    }
     
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pesan.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'tema' => 'required',
            'lokasi' => 'required',
            'kuota' => 'required',
            'tanggal' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        $path = $request->file('image')->store('public/images');
        $pesan = new Pesan;
        $pesan->nama = $request->nama;
        $pesan->tema = $request->tema;
        $pesan->lokasi = $request->lokasi;
        $pesan->kuota = $request->kuota;
        $pesan->tanggal = $request->tanggal;
        $pesan->image = $path;
        $pesan->save();
     
        return redirect()->route('pesans.index')
                        ->with('success','Post has been created successfully.');
    }
     
    /**
     * Display the specified resource.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Pesan $pesan)
    {
        return view('pesan.index',compact('pesan'));
    } 
     
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Pesan $pesan)
    {
        return view('pesan.edit',compact('pesan'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'tema' => 'required',
            'lokasi' => 'required',
            'kuota' => 'required',
            'tanggal' => 'required',
            
        ]);
        
        $pesan = Pesan::find($id);
        if($request->hasFile('image')){
            $request->validate([
              'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $path = $request->file('image')->store('public/images');
            $pesan->image = $path;
        }
        $pesan->nama = $request->nama;
        $pesan->tema = $request->tema;
        $pesan->lokasi = $request->lokasi;
        $pesan->kuota = $request->kuota;
        $pesan->tanggal = $request->tanggal;
        $pesan->image = $path;
        $pesan->save();
    
        return redirect()->route('pesans.index')
                        ->with('success','Post updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pesan $pesan)
    {
        $pesan->delete();
    
        return redirect()->route('pesans.index')
                        ->with('success','Post has been deleted successfully');
    }
}