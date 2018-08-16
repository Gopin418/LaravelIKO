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
use App\JSA_Status;
use App\ADL_Status;
use App\IPB_Status;

class IKO extends Controller
{
    public function pending(){
        // join data utama IKO
        $data = DB::table('pengantar')
        ->join('kontraktor','pengantar.id', '=', 'kontraktor.id')
        ->join('emergency', 'pengantar.id', '=', 'emergency.id')
        ->join('desc_project', 'pengantar.id', '=', 'desc_project.id')
        ->join('gmp', 'pengantar.id', '=', 'gmp.id')
        ->join('catatan', 'pengantar.id', '=', 'catatan.id')
        ->join('nutrifood', 'pengantar.id', '=', 'nutrifood.id')
        ->join('iko_status' ,'pengantar.id', '=', 'iko_status.id')
        ->where('status', '=', 'Pending')
        ->orderBy('pengantar.id')
        ->get();
        
        $jumlah = Pengantar::count();
        $ADL_pending = ADL_Status::where('status', 'pending')->count();
        $JSA_pending = JSA_Status::where('status', 'pending')->count();
        $IKO_pending = IKO_Status::where('status', 'pending')->count();
        $IPB_pending = IPB_Status::where('status', 'pending')->count();

        return view('admin/IKO/iko-pending', [
            'ADL_pending' => $ADL_pending,
            'JSA_pending' => $JSA_pending,
            'IKO_pending' => $IKO_pending,
            'IPB_pending' => $IPB_pending,
            'data' => $data,
            'jumlah' => $jumlah
        ]);
    }

    public function approved(){
        // join data utama IKO
        $data = DB::table('pengantar')
        ->join('kontraktor','pengantar.id', '=', 'kontraktor.id')
        ->join('emergency', 'pengantar.id', '=', 'emergency.id')
        ->join('desc_project', 'pengantar.id', '=', 'desc_project.id')
        ->join('gmp', 'pengantar.id', '=', 'gmp.id')
        ->join('catatan', 'pengantar.id', '=', 'catatan.id')
        ->join('nutrifood', 'pengantar.id', '=', 'nutrifood.id')
        ->join('iko_status' ,'pengantar.id', '=', 'iko_status.id')
        ->where('status', '=', 'Approved')
        ->orderBy('pengantar.id')
        ->get();

        $jumlah = Pengantar::count();
        $ADL_pending = ADL_Status::where('status', 'pending')->count();
        $JSA_pending = JSA_Status::where('status', 'pending')->count();
        $IKO_pending = IKO_Status::where('status', 'pending')->count();
        $IPB_pending = IPB_Status::where('status', 'pending')->count();

        $IKO_approved = IKO_Status::where('status', 'approved')->count();

        return view('admin/IKO/iko-approved', [
            'IKO_approved' => $IKO_approved,    
            'ADL_pending' => $ADL_pending,
            'JSA_pending' => $JSA_pending,
            'IKO_pending' => $IKO_pending,
            'IPB_pending' => $IPB_pending,
            'data' => $data,
            'jumlah' => $jumlah
        ]);
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
        // dd($id);'
        //update
    $iko_status = IKO_Status::where('id' , '=', $id)->first();
    $iko_status->status = 'Approved';
    // dd($iko_status);
    $iko_status->save();

    return redirect()->back();

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
