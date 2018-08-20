<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\IKO_Status;
use App\JSA_Status;
use App\ADL_Status;
use App\IPB_Status;

class IPBController extends Controller
{
    public function pending() {

      $ipb = DB::table('pengantar')
      ->join('kontraktor', 'pengantar.id', '=', 'kontraktor.id')
      ->join('emergency', 'pengantar.id', '=', 'emergency.id')
      ->join('desc_project', 'pengantar.id', '=', 'desc_project.id')
      ->join('catatan', 'pengantar.id', '=', 'catatan.id')
      ->join('ipb_status', 'pengantar.id', '=', 'ipb_status.id')
      ->where('status', '=', 'pending')
      ->get();

      $IKO_pending = IKO_Status::where('status', 'Pending')->count();
      $JSA_pending = JSA_Status::where('status', 'Pending')->count();
      $ADL_pending = ADL_Status::where('status', 'Pending')->count();
      $IPB_pending = IPB_Status::where('status', 'Pending')->count();

      return view('admin/IPB/ipb-pending', [
        'ipb' => $ipb,
        'IKO_pending' => $IKO_pending,
        'JSA_pending' => $JSA_pending,
        'ADL_pending' => $ADL_pending,
        'IPB_pending' => $IPB_pending
      ]);

    }

    public function update($id) {

    }

    public function approved() {
      $ipb = DB::table('pengantar')
      ->join('kontraktor', 'pengantar.id', '=', 'kontraktor.id')
      ->join('emergency', 'pengantar.id', '=', 'emergency.id')
      ->join('desc_project', 'pengantar.id', '=', 'desc_project.id')
      ->join('ipb_status', 'pengantar.id', '=', 'ipb_status.id')
      ->where('status', '=', 'approved')
      ->get();

      $IKO_pending = IKO_Status::where('status', 'Pending')->count();
      $JSA_pending = JSA_Status::where('status', 'Pending')->count();
      $ADL_pending = ADL_Status::where('status', 'Pending')->count();
      $IPB_pending = IPB_Status::where('status', 'Pending')->count();
      $IPB_approved = IPB_Status::where('status', 'Approved')->count();

      return view('admin/IPB/ipb-approved', [
        'ipb' => $ipb,
        'IKO_pending' => $IKO_pending,
        'JSA_pending' => $JSA_pending,
        'ADL_pending' => $ADL_pending,
        'IPB_pending' => $IPB_pending,
        'IPB_approved' => $IPB_approved
      ]);
    }
}
