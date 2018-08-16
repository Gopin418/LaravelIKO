<?php

namespace App\Http\Controllers;

//Library
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

//Model
use App\pengantar;
use App\catatan;
use App\desc_project;
use App\emergency;
use App\gmp;
use App\kontraktor;
use App\nutrifood;
use App\JSA;
use App\ADL;
use App\IPB;
use App\Ruangan;
use App\Kebakaran;
use App\Ketinggian;
use App\IKO_Status;

class DataController extends Controller
{
    public function IKO() {
        $data = DB::table('pengantar')
        ->join('kontraktor','pengantar.id', '=', 'kontraktor.id')
        ->join('emergency', 'pengantar.id', '=', 'emergency.id')
        ->join('desc_project', 'pengantar.id', '=', 'desc_project.id')
        ->join('gmp', 'pengantar.id', '=', 'gmp.id')
        ->join('catatan', 'pengantar.id', '=', 'catatan.id')
        ->orderBy('pengantar.id')
        ->get();
        $IKO_pending = IKO_Status::where('status', 'pending')->count();
        $jumlah = Pengantar::count();
        return view('Data/Data-IKO',[
            'IKO_pending' => $IkO_pending,
            'data' => $data,
            'jumlah' => $jumlah
        ]);
    }
}
