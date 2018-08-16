<?php

namespace App\Http\Controllers;

//Library
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

//Model
use App\IKO_Status;
use App\JSA_Status;
use App\ADL_Status;
use App\IPB_Status;
use App\User;
use App\Role;

class Admin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->hasRole('Admin Biasa') || Auth::user()->hasRole('Admin Utama')){
            $list = DB::table('role_user')
            ->leftJoin('roles', 'role_user.role_id', '=', 'roles.id')
            ->rightJoin('users', 'users.id', '=', 'role_user.user_id')
            ->where('role_name', '!=', 'Super Admin')
            ->orderBy('users.created_at', 'asc')
            ->get();
        } elseif(Auth::user()->hasRole('Admin Developer')) {
            $list = DB::table('role_user')
            ->leftJoin('roles', 'role_user.role_id', '=', 'roles.id')
            ->rightJoin('users', 'users.id', '=', 'role_user.user_id')
            ->orderBy('users.created_at', 'asc')
            ->get();
        }
        $ADL_pending = ADL_status::where('status', 'Pending')->count();
        $JSA_pending = JSA_Status::where('status', 'Pending')->count();
        $IKO_pending = IKO_Status::where('status', 'Pending')->count();
        $IPB_pending = IPB_Status::where('status', 'Pending')->count();
        return view('admin/admin/list', [
            'list' => $list,
            'IKO_pending' => $IKO_pending,
            'JSA_pending' => $JSA_pending,
            'ADL_pending' => $ADL_pending,
            'IPB_pending' => $IPB_pending
        ]);
    }

    public function role() {
        $list = DB::table('roles')->orderBy('id')->get();

        $ADL_pending = ADL_Status::where('status', 'Pending')->count();
        $JSA_pending = JSA_Status::where('status', 'Pending')->count();
        $IKO_pending = IKO_Status::where('status', 'Pending')->count();
        $IPB_pending = IPB_Status::where('status', 'Pending')->count();
        return view('admin/admin/role', [
            'list' => $list,
            'IKO_pending' => $IKO_pending,
            'JSA_pending' => $JSA_pending,
            'ADL_pending' => $ADL_pending,
            'IPB_pending' => $IPB_pending
        ]);
    }

    public function add() {
        
        $ADL_pending = ADL_Status::where('status', 'Pending')->count();
        $JSA_pending = JSA_Status::where('status', 'Pending')->count();
        $IKO_pending = IKO_Status::where('status', 'Pending')->count();
        $IPB_pending = IPB_Status::where('status', 'Pending')->count();

        return view('admin/admin/add', [
            'IKO_pending' => $IKO_pending,
            'JSA_pending' => $JSA_pending,
            'ADL_pending' => $ADL_pending,
            'IPB_pending' => $IPB_pending
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $role = Role::where('role_name', '=', $request->role)->first();
        $user = new User;
        $user->name     = $request->nama;
        $user->email    = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        $user->roles()->attach($role);

        return redirect('/admin/list');
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
        $user = User::where('id', '=', $id)->first();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->roles()->sync([$request->roles]);
        // dd($user);
        $user->save();
        
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
        $user = User::find($id)->delete();

        $role_user = DB::table('role_user')->where('user_id', '=', $id)->delete();

        return redirect()->back();
    }
}
