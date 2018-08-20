<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Model
use App\utility;
use App\IPB_Status;
use App\IKO_Status;
use App\JSA_Status;
use App\ADL_Status;
use App\departement;

class UtilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departement = departement::get();
        $utility = utility::get();
        $air     = utility::where('jenis', 'air')->first();
        $angin   = utility::where('jenis', 'angin')->first();
        $listrik = utility::where('jenis', 'listrik')->first();
        $steam   = utility::where('jenis', 'steam')->first();
        $IKO_pending = IKO_Status::where('status', 'Pending')->count();
        $JSA_pending = JSA_Status::where('status', 'Pending')->count();
        $ADL_pending = ADL_Status::where('status', 'Pending')->count();
        $IPB_pending = IPB_Status::where('status', 'Pending')->count();

        return view('admin/utility/approval-utility', [
            'departement' => $departement,
            'utility' => $utility,
            'air' => $air,
            'angin' => $angin,
            'listrik' => $listrik,
            'steam' => $steam,
            'IKO_pending' => $IKO_pending,
            'JSA_pending' => $JSA_pending,
            'ADL_pending' => $ADL_pending,
            'IPB_pending' => $IPB_pending
        ]);
    }



    // Store approval Air
    public function storeAir(Request $request) {

    return redirect()->back();
    }

    // Store Approval Angin
    public function storeAngin(Request $request) {

      return redirect()->back();
    }

    // Store Approval Listrik
    public function storeListrik(Request $request) {

      return redirect()->back();
    }

    // Store Approval Steam
    public function storeSteam(Request $request) {

      return redirect()->back();
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateAir(Request $request, $id) {
        $air = Utility::where([
          ['id', '=', $id],
          ['jenis', '=', 'air']
        ])->first();
        $air->name        = $request->name_air;
        $air->email       = $request->email_pj_air;
        $air->telp        = $request->telp_pj_air;
        $air->departement = $request->departement_air;
        $air->save();

        return redirect()->back();
    }

    public function updateAngin(Request $request, $id){
      $angin = Utility::where([
        ['id', '=', $id],
        ['jenis', '=', 'angin']
      ])->first();
      $angin->name        = $request->name_angin;
      $angin->email       = $request->email_pj_angin;
      $angin->telp        = $request->telp_pj_angin;
      $angin->departement = $request->departement_angin;
      $angin->save();

      return redirect()->back();
    }

    public function updateListrik(Request $request, $id) {
      $listrik = Utility::where([
        ['id', '=', $id],
        ['jenis', '=', 'listrik']
      ])->first();
      $listrik->name        = $request->name_listrik;
      $listrik->email       = $request->email_pj_listrik;
      $listrik->telp        = $request->telp_pj_listrik;
      $listrik->departement = $request->departement_listrik;
      $listrik->save();

      return redirect()->back();
    }

    public function updateSteam(Request $request, $id) {
      $steam = Utility::where([
        ['id', '=', $id],
        ['jenis', '=', 'steam']
      ])->first();
      $air->name        = $request->name_steam;
      $steam->email       = $request->email_pj_steam;
      $steam->telp        = $request->telp_pj_steam;
      $steam->departement = $request->departement_steam;
      $steam->save();

      return redirect()->back();
    }

}
