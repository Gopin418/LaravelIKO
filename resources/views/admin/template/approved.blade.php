@extends('admin')

@section('content-header')
Izin Kerja Kontraktor
@endsection

@section('breadcrumb')
    @if(Auth::user()->hasRole('Admin Utama') || Auth::user()->hasRole('Admin Developer'))
        <li>@yield('jenis')</li>
        <li class="active">Approved</li>
    @elseif(Auth::user()->hasRole('Admin Biasa'))
        <li class="active">@yield('jenis')</li>
    @endif
@endsection


@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Approved Contract</h3>
            </div>

            <div class="box-body table-responsive no-padding">

                <table class="table table-striped table-hover">
                    @yield('approved-datatable')
                </table>
            </div>
        </div>
    </div>
</div>
@endsection