@extends('admin')

@section('content-header')
Role List
@endsection

@section('content-header-description')
{{ Auth::user()->name }}
@endsection

@section('breadcrumb')
<li>User Management</li>
<li class="active">Roles</li>
@endsection

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box box-solid box-default">
            <div class="box-header">
                <div class="box-title">User List</div>
            </div>

            <div class="box-body">
                <table class="table table-borderless table-hover table-striped">
                    <tr>
                        <th>Id Role</th>
                        <th>Nama Role</th>
                        <th>Deskripsi Role</th>
                    </tr>
                    @foreach( $list as $lists )
                    <tr>
                        <td>{{ $lists->id }}</td>
                        <td>{{ $lists->role_name }}</td>
                        <td>{{ $lists->description }}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection