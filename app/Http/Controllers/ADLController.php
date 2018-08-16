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

class ADLController extends Controller
{
    public function pending() {
        $adl = DB::table('pengantar')
        ->join('kontraktor', 'pengantar.id', '=', 'kontraktor.id')
        ->join('emergency', 'pengantar.id', '=', 'emergency.id')
        ->join('desc_project', 'pengantar.id', '=', 'desc_project.id')
        ->join('adl', 'pengantar.id', '=', 'adl.id')
        ->join('adl_status', 'pengantar.id', '=', 'adl_status.id')
        ->where('status', '=', 'pending')
        ->get();

        $jumlah      = ADL::count();
        $ADL_pending = ADL_Status::where('status', 'pending')->count();
        $JSA_pending = JSA_Status::where('status', 'pending')->count();
        $IKO_pending = IKO_Status::where('status', 'pending')->count();
        $IPB_pending = IPB_Status::where('status', 'pending')->count();

        return view('admin/ADL/adl-pending', [    
            'jumlah'      => $jumlah,
            'ADL_pending' => $ADL_pending,
            'JSA_pending' => $JSA_pending,
            'IKO_pending' => $IKO_pending,
            'IPB_pending' => $IPB_pending,
            'adl' => $adl
        ]);
    }

    public function approved() {
        $adl = DB::table('pengantar')
        ->join('kontraktor', 'pengantar.id', '=', 'kontraktor.id')
        ->join('emergency', 'pengantar.id', '=', 'emergency.id')
        ->join('desc_project', 'pengantar.id', '=', 'desc_project.id')
        ->join('adl', 'pengantar.id', '=', 'adl.id')
        ->join('adl_status', 'pengantar.id', '=', 'adl_status.id')
        ->where('status', '=', 'Approved')
        ->get();

        $jumlah      = ADL::count();
        $ADL_pending = ADL_Status::where('status', 'pending')->count();
        $JSA_pending = JSA_Status::where('status', 'pending')->count();
        $IKO_pending = IKO_Status::where('status', 'pending')->count();
        $IPB_pending = IPB_Status::where('status', 'pending')->count();
        $ADL_approved = ADL_Status::where('status', 'approved')->count();

        return view('admin/ADL/adl-approved', [
            'ADL_approved' => $ADL_approved,
            'jumlah'      => $jumlah,
            'ADL_pending' => $ADL_pending,
            'JSA_pending' => $JSA_pending,
            'IKO_pending' => $IKO_pending,
            'IPB_pending' => $IPB_pending,
            'adl' => $adl
        ]);
    }

    public function update(Request $request, $id) {
        // dd($id);
        //update
    $adl_status = ADL_Status::where('id' , '=', $id)->first();
    $adl_status->status = 'Approved';
    // dd($adl_status);
    $adl_status->save();

    return redirect()->back();

    }
}
