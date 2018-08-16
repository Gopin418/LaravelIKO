<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Model
use App\utility;
use App\IPB_Status;
use App\IKO_Status;
use App\JSA_Status;
use App\ADL_Status;

class UtilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
    public function update(Request $request, $id)
    {
        //
    }

}
