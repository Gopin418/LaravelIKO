<?php

namespace App\Http\Controllers;

//Library
use Illuminate\Http\Request;
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
use App\Ruangan;
use App\Kebakaran;
use App\Ketinggian;
use App\IKO_Status;
use App\JSA_Status;
use App\ADL_Status;
use App\IPB_Status;

class JSAController extends Controller
{
    public function pending() {
        $iko = DB::table('pengantar')
        ->join('kontraktor', 'pengantar.id', '=', 'kontraktor.id')
        ->join('emergency', 'pengantar.id', '=', 'emergency.id')
        ->join('desc_project', 'pengantar.id', '=', 'desc_project.id')
        ->join('jsa', 'pengantar.id', '=', 'jsa.id')
        ->join('jsa_status', 'pengantar.id', '=', 'jsa_status.id')
        ->where('status', '=', 'pending')
        ->get();

        $jumlahJSA   = JSA::count();
        $ADL_pending = ADL_Status::where('status', 'pending')->count();
        $JSA_pending = JSA_Status::where('status', 'pending')->count();
        $IKO_pending = IKO_Status::where('status', 'pending')->count();
        $IPB_pending = IPB_Status::where('status', 'pending')->count();

        return view('admin/JSA/jsa-pending', [
            'jumlahJSA'   => $jumlahJSA,
            'ADL_pending' => $ADL_pending,
            'JSA_pending' => $JSA_pending,
            'IKO_pending' => $IKO_pending,
            'IPB_pending' => $IPB_pending,
            'iko' => $iko
        ]);
    }

    public function approved() {
        $iko = DB::table('pengantar')
        ->join('kontraktor', 'pengantar.id', '=', 'kontraktor.id')
        ->join('emergency', 'pengantar.id', '=', 'emergency.id')
        ->join('desc_project', 'pengantar.id', '=', 'desc_project.id')
        ->join('jsa', 'pengantar.id', '=', 'jsa.id')
        ->join('jsa_status', 'pengantar.id', '=', 'jsa_status.id')
        ->where('status', '=', 'Approved')
        ->get();

        $jumlah      = ADL::count();
        $ADL_pending = ADL_Status::where('status', 'pending')->count();
        $JSA_pending = JSA_Status::where('status', 'pending')->count();
        $IKO_pending = IKO_Status::where('status', 'pending')->count();
        $IPB_pending = IPB_Status::where('status', 'pending')->count();

        $JSA_approved = JSA_Status::where('status', 'approved')->count();

        return view('admin/JSA/jsa-approved', [
            'JSA_approved' => $JSA_approved,
            'jumlah'      => $jumlah,
            'ADL_pending' => $ADL_pending,
            'JSA_pending' => $JSA_pending,
            'IKO_pending' => $IKO_pending,
            'IPB_pending' => $IPB_pending,
            'iko' => $iko
        ]);
    }

    public function update(Request $request, $id) {
        // dd($id);
        //update
    $jsa_status = JSA_Status::where('id' , '=', $id)->first();
    $jsa_status->status = 'Approved';
    // dd($jsa_status);
    $jsa_status->save();

    return redirect()->back();

    }
}
