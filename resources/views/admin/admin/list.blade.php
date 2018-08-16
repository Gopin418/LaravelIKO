@extends('admin')

@section('content-header')
Admin List
@endsection


@section('content-header-description')
{{ Auth::user()->name }}
@endsection

@section('breadcrumb')
    @if(Auth::user()->hasRole('Admin Developer'))
        <li>User Management</li>
        <li class="active">Users</li>
    @elseif(Auth::user()->hasRole('Admin Biasa') || Auth::user()->hasRole('Admin Utama'))
        <li>Users</li>
    @endif
@endsection

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box box-default">
            <div class="box-header">
                <div class="box-title">
                    <h4>User List</h4>
                </div>
                @if(Auth::user()->hasRole('Admin Developer') || Auth::user()->hasRole('Admin Utama'))
                    <a href="/admin/add"><button class="btn btn-success pull-right">Add Admin</button></a>
                @elseif(Auth::user()->hasRole('Admin Biasa'))
                @endif
            </div>

            <div class="box-body">
                <table class="table table-borderless table-hover table-striped">
                    <tr>
                        <th>Nama User</th>
                        <th>Email User</th>
                        <th>Role User</th>
                        <th>Deskripsi Role</th>
                        <th>Action</th>
                    </tr>
                    @foreach( $list as $lists )
                    
                    <tr>
                        <td>{{ $lists->name }}</td>
                        <td>{{ $lists->email }}</td>
                        <td>{{ $lists->role_name }}</td>
                        <td>{{ $lists->description }}</td>
                        <td>
                            <form action="/admin/list/{{ $lists->id }}" method="post">
                                <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#detail{{ $lists->id }}">Detail</button>
                                @if ( Auth::user()->hasRole('Admin Developer') || Auth::user()->hasRole('Admin Utama'))
                                <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#edit{{ $lists->id }}">Edit</button>
                                <input type="submit" value="Delete" class="btn btn-danger btn-xs">
                                @elseif(Auth::user()->hasRole('Admin Biasa'))

                                @endif
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="DELETE">
                            </form>
                        </td>
                    </tr>
    {{-- Modal --}}
    <div class="modal fade" role="dialog" id="edit{{$lists->id}}">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Edit Admin {{ $lists->name }}</h4>
                </div>
                <div class="modal-body">
                    <form action="/admin/list/{{ $lists->id }}" method="post">
                        <div class="form-group">
                            <label for="name">Nama Admin</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="e.g Alvin Ardiansyah" value="{{ $lists->name }}" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email Admin</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="e.g example@mail.com" value="{{ $lists->email }}" required>
                        </div>
                        <div class="form-group">
                            <label for="password">New Password</label>
                            <input type="text" name="password" id="password" class="form-control" placeholder="must contain 'hse'" required>
                        </div>
                        <div class="form-group">
                            <label for="roles">Admin Role</label>
                            <br>
                            <select class="form-control select2" name="roles">
                                <option value="2">Admin Biasa</option>
                                <option value="1">Admin Utama</option>
                            </select>
                        </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary col-xs-4 pull-right" value="Save">
                </div>
                <input type="hidden" name="_method" value="PUT">
                {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>
    {{-- Modal --}}
    <div class="modal fade" role="dialog" id="detail{{$lists->id}}">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title">Detail Admin {{ $lists->name }}</h4>
                    </div>
                    <div class="modal-body">
                        
                    </div>
                    <div class="modal-footer">
                        
                    </div>
                </div>
            </div>
        </div>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection