@extends('admin')


@section('breadcrumb')
<li>@yield('jenis')</li>
<li class="active">Pending</li>
@endsection

@section('content-header-description')
Pending Form waiting for Approvment
@endsection

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Pending Permission</h3>
            </div>

            <div class="box-body  table-responsive  no-padding">

                

                <table class="table table-striped table-hover">
                    @yield('pending-datatable')
                </table>
                    
                
            </div>
        </div>
    </div>
</div>
@endsection