@extends('admin')

@section('content-header')
Role List
@endsection

@section('content-header-description')
{{ Auth::user()->name }}
@endsection

@section('breadcrumb')
<li>User Management</li>
<li class="active">Users</li>
@endsection

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box box-default">
            <form action="/admin/add" method="POST">
            <div class="box-header">
                <div class="box-title">Add User</div>
            </div>

            <div class="box-body">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="box box-default" style="box-shadow: none;">
                            <div class="box-header">
                                <div class="box-title">
                                    General
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="nama">Nama User</label>
                                    <input type="text" name="nama" id="nama" class="form-control" placeholder="e.g Alvin Ardiansyah" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email User</label>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="e.g example@email.com" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="text" name="password" id="password" class="form-control" placeholder="Must Contain 'HSE' " required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="box box-default" style="box-shadow: none;">
                            <div class="box-header">
                                <div class="box-title">
                                    Role
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="role">Role</label>
                                    <select class="form-control select2" name="role">
                                        <option value="Admin Level 2">Admin Biasa</option>
                                        <option value="Admin Level 1">Admin Utama</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-footer">
                <input type="submit" value="Save" class="btn btn-success pull-right col-xs-1">
                {{ csrf_field() }}
            </div>
        </form>
        </div>
    </div>
</div>
@endsection