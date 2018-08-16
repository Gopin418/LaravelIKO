<?php

namespace App\Http\Controllers;

//Library
use Illuminate\Support\Facades\DB;

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
use App\IKO_Status;
use App\JSA_Status;
use App\ADL_Status;
use App\IPB_Status;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $currentTime = getdate();

        // Ongoing Data
        $ongoing = DB::table('pengantar')
        ->join('kontraktor','pengantar.id', '=', 'kontraktor.id')
        ->join('emergency', 'pengantar.id', '=', 'emergency.id')
        ->join('desc_project', 'pengantar.id', '=', 'desc_project.id')
        ->join('gmp', 'pengantar.id', '=', 'gmp.id')
        ->join('catatan', 'pengantar.id', '=', 'catatan.id')
        ->join('nutrifood', 'pengantar.id', '=', 'nutrifood.id')
        ->join('adl_status', 'pengantar.id', '=', 'adl_status.id')
        ->join('iko_status', 'pengantar.id', '=', 'iko_status.id')
        ->join('jsa_status', 'pengantar.id', '=', 'jsa_status.id')
        ->where([
            ['adl_status.status', '=', 'Approved'],
            ['iko_status.status', '=', 'Approved'],
            ['jsa_status.status', '=', 'Approved'],
            ['tanggal_mulai', '<=', now()->toDateString()],
            ['tanggal_selesai', '>=', now()->toDateString()]
        ])
        ->orderBy('pengantar.id')
        ->paginate(2);

        // On Going status
        $ongoingStatus = DB::table('pengantar')
        ->join('adl_status', 'pengantar.id', '=', 'adl_status.id')
        ->join('iko_status', 'pengantar.id', '=', 'iko_status.id')
        ->join('jsa_status', 'pengantar.id', '=', 'jsa_status.id')
        ->where([
            ['adl_status.status', '=', 'Approved'],
            ['iko_status.status', '=', 'Approved'],
            ['jsa_status.status', '=', 'Approved'],
            ['tanggal_mulai', '<=', now()->toDateString()],
            ['tanggal_selesai', '>=', now()->toDateString()]
        ])
        ->count();

        // label approved
        $IKO_approved = IKO_Status::where('status', 'Approved')->count();
        $JSA_approved = JSA_Status::where('status', 'Approved')->count();
        $ADL_approved = ADL_Status::where('status', 'Approved')->count();
        $IPB_approved = IPB_Status::where('status', 'Approved')->count();

        // label pending
        $ADL_pending = ADL_status::where('status', 'Pending')->count();
        $JSA_pending = JSA_Status::where('status', 'Pending')->count();
        $IKO_pending = IKO_Status::where('status', 'Pending')->count();
        $IPB_pending = IPB_Status::where('status', 'pending')->count();


        // label count (sidebar)
        $jumlahIPB = IPB::count();
        $jumlahADL = ADL::count();
        $jumlahJSA = JSA::count();
        $jumlahIPB = IPB::count();
        $jumlah = Pengantar::count();

        // count status IKO



        return view('admin/dashboard', [
            'currentTime' => $currentTime,
            'ongoingStatus' => $ongoingStatus,
            'IKO_approved' => $IKO_approved,
            'JSA_approved' => $JSA_approved,
            'ADL_approved' => $ADL_approved,
            'IPB_approved' => $IPB_approved,
            'ongoing' =>$ongoing,
            'IKO_pending' => $IKO_pending,
            'JSA_pending' => $JSA_pending,
            'ADL_pending' => $ADL_pending,
            'IPB_pending' => $IPB_pending,
            'jumlahADL' => $jumlahADL,
            'jumlahJSA' => $jumlahJSA,
            'jumlahIPB' => $jumlahIPB,
            'jumlah' => $jumlah
        ]);
    }
}
