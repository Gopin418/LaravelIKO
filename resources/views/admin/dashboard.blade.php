@extends('admin')

@section('content-header')
Dashboard Admin
@endsection

@section('content-header-description')
{{ Auth::user()->name }}
@endsection

@section('content')

{{-- Box info --}}
<div class="row">
    {{-- Kontraktor --}}
    <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-yellow">
            <div class="inner">
                <h3>{{ $jumlah }}</h3>

                <p>{{ $IKO_pending . ' Pending, ' . $IKO_approved . ' Approved'}}</p>
            </div>
            <div class="icon">
                <i class="fa fa-cogs"></i>
            </div>
            <a href="/admin/IKO/approved" class="small-box-footer">
                More info <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>

    <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-blue">
            <div class="inner">
                <h3>{{ $jumlahJSA }}</h3>

                <p>{{ $JSA_pending . ' Pending, ' . $JSA_approved . ' Approved'}}</p>
            </div>
            <div class="icon">
                <i class="fa fa-plus"></i>
            </div>
            <a href="#" class="small-box-footer">
                More info <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>

    <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-green">
            <div class="inner">
                <h3>{{ $jumlahADL }}</h3>

                <p>{{ $ADL_pending . ' Pending, ' . $ADL_approved . ' Approved'}}</p>
            </div>
            <div class="icon">
                <i class="fa fa-envira"></i>
            </div>
            <a href="#" class="small-box-footer">
                More info <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>

    <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-red">
            <div class="inner">
                <h3> {{ $jumlahIPB }} </h3>

                <p>{{ $IPB_pending . ' Pending, ' . $IPB_approved . ' Approved'}}</p>
            </div>
            <div class="icon">
                <i class="fa fa-fire"></i>
            </div>
            <a href="#" class="small-box-footer">
                More info <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>

</div>
{{-- /Box info --}}


{{-- On Going Porject --}}
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">On-going Project / Maintenance</h3>
            </div>
            {{-- /.box-header --}}
            @if( $ongoingStatus == 0 )
            <div class="box-body">
                <p>&nbsp;Tidak ada Pekerjaan Kontraktor yang sedang berjalan</p>
            </div>
            @else
            <div class="box-body table-responsive no-padding">
                <table class="table table-bordered table-hover">
                    <tr>
                        <th>Nama Kontraktor</th>
                        <th>Nama Pekerjaan</th>
                        <th>Jenis Pekerjaan</th>
                        <th>Dateline</th>
                        <th>Penanggung Jawab Kontraktor</th>
                        <th>No Telp</th>
                        <th>Penanggung Jawab Project</th>
                        <th>No Telp </th>
                    </tr>
                    @foreach( $ongoing as $datas )
                    <tr>
                        <td>{{ $datas->nama_kontraktor }}</td>
                        <td>{{ $datas->nama_pekerjaan }}</td>
                        <td>{{ $datas->jenis }}</td>
                        <td>{{ $datas->tgl_selesai }}</td>
                        <td>{{ $datas->pj_kontraktor }}</td>
                        <td>{{ $datas->telp_pj_kontraktor }}</td>
                        <td>{{ $datas->pj_project }}</td>
                        <td>{{ $datas->telp_pj_project }}</td>
                    </tr>
                    @endforeach
                </table>
                <div class="box-footer pull-right">
                    {{ $ongoing->links() }}
                </div>
            </div>
            @endif
        </div>
    </div>
</div>

{{-- upcoming Project --}}
<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3>Finished Project / Maintenance</h3>
      </div>
      @if($upcomingStatus == 0)
        <div class="box-body">
          <p>&nbsp;Tidak ada Pekerjaan Kontraktor yang akan datang</p>
        </div>
    </div>
  </div>
</div>

@endsection
