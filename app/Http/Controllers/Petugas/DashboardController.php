<?php

namespace App\Http\Controllers\Petugas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class DashboardController extends Controller
{
    public function index()
    {
        // $user = 
        // $user = Auth::user()->nama;
        return view('petugas.dashboard');
    }
}
