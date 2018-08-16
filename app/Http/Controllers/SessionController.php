<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SessionController extends Controller
{
    public function accessSessionData(Request $request) {
        if($request->session()->has('IKO'))
            echo $request->session()->get('IKO');
        else
            echo 'No data in the session';
    }

    public function storeSessionData(Request $request) {
        $request->session()->put('IKO', 'Data IKO');
        echo 'Data has been added to session';
    }

    public function deleteSessionData(Request $request) {
        $request->session()->forget('IKO');
        echo 'Data has been removed from session';
    }
}
