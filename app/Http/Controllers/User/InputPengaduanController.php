<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class InputPengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $user = DB::table('users')->join('tb_pengduan','users.id','=','etb_pengdauan.id_user')->get();

        // $nama = Auth::user()->nama_lengkap;
        $id = Auth::user()->id;
        $nama = DB::table('users')->where('id', $id)->first();
        return view('user.input_pengaduan.index', compact('nama'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $id = Auth::user()->id;
        $request->validate([
            // 'nama'            => 'required',
            'tempat'          => 'required',
            'tanggal_lahir'   => 'required',
            'jenis_kelamin'   => 'required',
            'pekerjaan'       => 'required',
            'kewarganegaraan' => 'required',
            'alamat'          => 'required',
            'keterangan'      => 'required',
            'gambar'          => 'mimes:jpeg,png,jpg|max:2048',
            'tanggal_kejadian'=> 'required',
            'tempat_kejadian' => 'required',
        ]);

        $imgName = $request->gambar->getClientOriginalName() . '-' .time() . '.' . $request->gambar->extension();
        $request->gambar->move(public_path('image'), $imgName);


        DB::table('tb_pengaduan')->insert([
            // 'nama' => $request->nama,
            'user_id' => $id,
            'tempat' => $request->tempat,
            'tanggal_lahir'  => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'pekerjaan' => $request->pekerjaan,
            'kewarganegaraan' => $request->kewarganegaraan,
            'alamat' => $request->alamat,
            'keterangan' => $request->keterangan,
            'gambar' => $imgName,
            'status' => 0,
            'tanggal_kejadian' => $request->tanggal_kejadian,
            'tempat_kejadian' => $request->tempat_kejadian
        ]);
        return redirect()->route('inputPengaduan.user')->with('message','Data Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
