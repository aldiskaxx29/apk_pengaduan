<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class StatusPengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id;
        // $status = DB::table('tb_pengaduan')->where('nama',$user)->get();
        $status = DB::table('tb_pengaduan')->where('user_id',$id)->join('users','users.id','=','tb_pengaduan.user_id')->get();
        // dd($status);
        return view('user.status_pengaduan.index', compact('status'));
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
        // $id = Auth::user()->id;
        // $id = Auth::user()->id;
        // $status = DB::table('tb_pengaduan','tb_pengaduan.user_id','=','users.id')->first();
        $status = DB::table('tb_pengaduan')->where('id_pengaduan',$id)->join('users','users.id','=','tb_pengaduan.user_id')->first();
        // dd($status->gambar);
        return view('user.status_pengaduan.detail', compact('status'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DB::table('tb_pengaduan')->join('users','users.id','=','tb_pengdauan.user_id')->where('id_pengaduan',$id)->first();
        return view('user.status_pengaduan.edit', compact('data'));
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
        dd($request->all());
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
