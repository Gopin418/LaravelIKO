@extends('admin.template.approved')

@section('content-header')
Analisa Dampak Lingkungan
@endsection

@section('jenis')
ADL
@endsection


@section('approved-datatable')
@if( $ADL_approved == 0 )
<div class="box-body">
    <p>Tidak ada Data ADL Tersedia</p>
</div>
@else
<tr>
    <th>Nama Kontraktor</th>
    <th>Nama Pekerjaan</th>
    <th>Jenis Pekerjaan</th>
    <th>Lokasi</th>
    <th>Tanggal Mulai</th>
    <th>Tanggal Selesai</th>
    <th></th>
</tr>
@endif
@foreach( $adl as $dataIKO )
    <tr>
        <td>{{ $dataIKO->nama_kontraktor }}</td>
        <td>{{ $dataIKO->nama_pekerjaan }}</td>
        <td>{{ $dataIKO->jenis }}</td>
        <td>{{ 'Nutrifood ' . $dataIKO->lokasi . ', ' . $dataIKO->area }}</td>
        <td>{{ $dataIKO->tgl_mulai }}</td>
        <td>{{ $dataIKO->tgl_selesai }}</td>
        <td>
            <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal-default{{$dataIKO->id}}">Detail</button>
        </td>
    </tr>

    {{-- Modal --}}
    <div class="modal fade" role="dialog" id="modal-default{{$dataIKO->id}}">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title">Detail ADL {{ $dataIKO->nama_kontraktor }}</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-xs-5" style="border-right: 1px solid #ddd">
                                
                                
                                <div class="box text-muted" style="font-size: 1.2em; font-style: 'Verdana'; box-shadow: none;">
                                    <div class="box-header bg-gray"><span class="text-muted">{{ $dataIKO->id }}/ ADL / 2018</span></div>
                                    <div class="box-body">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                Nama Kontraktor : <p class="pull-right">{{ $dataIKO->nama_kontraktor }}</p>
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                Nama Pekerjaan : <p class="pull-right">{{ $dataIKO->nama_pekerjaan }}</p>
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                Jenis Pekerjaan : <p class="pull-right">{{ $dataIKO->jenis }}</p>
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                Lokasi Pekerjaan : <p class="pull-right">{{ 'Nutrifood ' . $dataIKO->lokasi }}</p>
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                Tanggal Mulai : <p class="pull-right">{{ $dataIKO->tgl_mulai }}</p>
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                Tanggal Selesai : <p class="pull-right">{{ $dataIKO->tgl_selesai }}</p>
                                            </div>
                                        </div><br>
                                        Deskripsi Pekerjaan
                                            <br>
                                        <p>{{ $dataIKO->deskripsi }}</p>
                                    </div>
                                </div>
                            
                            
                            </div>

                            <div class="col-xs-7" style="border-right: 1px solid #ddd">
                                
                                
                                    <div class="box" style="font-style: 'Verdana'; box-shadow: none;">
                                        <div class="box-header bg-gray"><span class="text-muted">DETAILS</span></div>
                                        <div class="box-body">
                                                @foreach(explode(',', $dataIKO->aktivitas) as $detilADL)
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        {{ 'Aktivitas ' . $dataIKO->id }}
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        Nama Aktivitas : <p class="pull-right">{{ $detilADL }}</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        Alat dan Bahan : 
                                                        <div dir="rtl">
                                                            <ul>
                                                                @foreach(explode(',', $dataIKO->adb) as $adb)
                                                                <li>{{ $adb }}</li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        Jenis Pencemaran :
                                                        <div dir="rtl">
                                                            <ul>
                                                                @foreach(explode(',', $dataIKO->potensi_pencemaran) as $pencemaran)
                                                                <li>{{ $pencemaran }}</li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        Potensi Pencemaran :
                                                        <div dir="rtl">
                                                            <ul>
                                                                @foreach(explode(',', $dataIKO->potensi_pencemaran) as $potensi)
                                                                <li>{{ $potensi }}</li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        Pengendalian :
                                                        <div dir="rtl">
                                                            <ul>
                                                                @foreach(explode(',', $dataIKO->pengendalian) as $pengendalian)
                                                                <li>{{ $pengendalian }}</li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        Penanggung Jawab : <p class="pull-right">{{ $dataIKO->penanggung_jawab }}</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        Keterangan : <p class="pull-right">{{ $dataIKO->keterangan }}</p>
                                                    </div>
                                                </div>
                                                <hr>
                                                @endforeach
                                            </div>
                                    </div>
                                
                                
                                </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection