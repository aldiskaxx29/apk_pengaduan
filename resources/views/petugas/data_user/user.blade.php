@extends('templates.master')

@section('title','Data User')

@section('content')

<div class="card">
    <div class="card-body">
        @if (session('message'))   
            <div class="alert alert-success alert-dismissible show fade">
                <div class="alert-body">
                <button class="close" data-dismiss="alert">
                    <span>×</span>
                </button>
                {{ session('message') }}
                </div>
            </div>            
        @endif
        {{-- <a href="" class="btn btn-primary"><i class="fas fa-plush"></i> Tambah Data</a>     --}}
        <hr>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Username</th>
                    {{-- <th>Jenis Kelamin</th> --}}
                    <th>Status</th>
                    {{-- <th>action</th> --}}
                    {{-- <th>Alamat</th> --}}
                    {{-- <th>Keterngan</th>
                    <th>Gambar</th> --}}
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user as $no => $item)
                <tr>
                    <td>{{$no+1}}</td>
                    <td>{{$item->nama_lengkap}}</td>
                    <td>{{$item->username}}</td>
                    <td>{{$item->role_user}}</td>
                    {{-- <td>{{$item->kewarganegaraan}}</td> --}}
                    {{-- <td>
                        @if ($item->role_user == 0)
                            <small class="badge badge-warning" data-toggle="modal" data-target="#exampleModalAcc{{$item->id_pengaduan}}" style="cursor:pointer">Pending</small>    
                        @elseif($item->role_user == 1)
                            <small class="badge badge-success">Success</small>                        
                        @elseif($item->role_user == 2)
                            <small class="badge badge-danger">Gagal</small>                          
                        @endif
                    </td> --}}
                    {{-- <td>Sepatan</td> --}}
                    <td>
                        <a href="{{url('dataPengaduan/hapus/' . $item->id)}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Mau Di Hapus')"><i class="fas fa-trash"></i></a>
                        <a href="{{url('dataPengaduan/edit/' . $item->id)}}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                        <a href="{{url('dataPengaduan/detail/' . $item->id)}}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                    </td>
                </tr>                    
                @endforeach
            </tbody>
        </table>
    </div>    
</div>    
    
@endsection