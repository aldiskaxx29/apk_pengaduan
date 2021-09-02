<?php

namespace App\Http\Controllers\Petugas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataPengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengaduan = DB::table('tb_pengaduan')->get();
        return view('petugas.data_pengaduan.index', compact('pengaduan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // dd($id);
        // $where = DB::table('tb_pengaduan')->where($id);
        $item = DB::table('tb_pengaduan')->where('id_pengaduan',$id)->first();        
        return view('petugas.data_pengaduan.detail', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = DB::table('tb_pengaduan')->where('id_pengaduan',$id)->first();
        return view('petugas.data_pengaduan.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $request->validate([
            'nama' => 'required',
            'tempat' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'pekerjaan' => 'required',
            'kewarganegaraan' => 'required',
            'alamat' => 'required',
            'keterangan' => 'required',
        ]);

        DB::table('tb_pengaduan')->where('id_pengaduan',$id)->update([
            'nama' => $request->nama,
            'tempat' => $request->tempat,
            'tanggal_lahir' => $request->tanggal_lahir,
            'pekerjaan' => $request->pekerjaan,
            'kewarganegaraan' => $request->kewarganegaraan,
            'alamat' => $request->alamat,
            'keterangan' => $request->keterangan
        ]);

        return redirect('dataPengaduan')->with('message','Data Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::tbale('tb_pengdauan')->where('id_pengaduan',$id)->first();
        return redirect('dataPengaduan')->with('message','Data Berhsail Di Hapus');
    }

    public function acc(Request $request, $id){
        DB::table('tb_pengaduan')->where('id_pengaduan',$id)->update([
            'status' => $request->status
        ]);
        return redirect('dataPengaduan')->with('message','Data Berhasil Di Cek');
    }
}
