@extends('admin.template.approved')

@section('jenis')
IKO
@endsection

@section('approved-datatable')
    @if( $IKO_approved == 0)
    <div class="box-body">
        <p>Tidak ada Data IKO Tersedia</p>
    </div>
    @else
    <tr>
        <th>Nama Kontraktor</th>
        <th>Nama Pekerjaan</th>
        <th>Jenis Pekerjaan</th>
        <th>Lokasi Lokasi</th>
        <th>Tanggal Mulai</th>
        <th>Tanggal Selesai</th>
        <th></th>
    </tr>
    @endif
    @foreach($data as $datas)
    <tr>
        <td>{{ $datas->nama_kontraktor }}</td>
        <td>{{ $datas->nama_pekerjaan }}</td>
        <td>{{ $datas->jenis }}</td>
        <td>{{ 'Nutrifood ' . $datas->lokasi . ', ' . $datas->area }}</td>
        <td>{{ $datas->tgl_mulai }}</td>
        <td>{{ $datas->tgl_selesai }}</td>
        <td>
            <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal-default{{$datas->id}}">Detail</button>
        </td>
    </tr>
    <div class="modal fade" role="dialog" id="modal-default{{$datas->id}}">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title">Detail IKO {{ $datas->nama_kontraktor }}</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-xs-5" style="border-right: 1px solid #ddd">


                                <div class="box text-muted" style="font-size: 1.2em; font-style: 'Verdana'; box-shadow: none;">
                                    <div class="box-header bg-gray"><span class="text-muted">{{ $datas->id }}/IKO/2018</span></div>
                                    <div class="box-body">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                Nama Kontraktor : <p class="pull-right">{{ $datas->nama_kontraktor }}</p>
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                Nama Pekerjaan : <p class="pull-right">{{ $datas->nama_pekerjaan }}</p>
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                Jenis Pekerjaan : <p class="pull-right">{{ $datas->jenis }}</p>
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                Lokasi Pekerjaan : <p class="pull-right">{{ 'Nutrifood ' . $datas->lokasi }}</p>
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                Tanggal Mulai : <p class="pull-right">{{ $datas->tgl_mulai }}</p>
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                Tanggal Selesai : <p class="pull-right">{{ $datas->tgl_selesai }}</p>
                                            </div>
                                        </div><br>
                                        Deskripsi Pekerjaan
                                            <br>
                                        <p>{{ $datas->deskripsi }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-7">
                                <div class="box" style="box-shadow:none">
                                    <div class="box-header bg-gray " style="font-size:1.2em">
                                        <span class="text-muted">DETAILS</span>
                                    </div>
                                    <div class="box-body">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                Penanggung Jawab Kontraktor : <p class="pull-right">{{ $datas->pj_kontraktor }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                No. Telp : <b><p class="pull-right">{{ $datas->telp_pj_kontraktor }}</p></b>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                Penanggung Jawab Lapangan : <p class="pull-right">{{ $datas->pj_lapangan }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                No. Telp : <b><p class="pull-right">{{ $datas->telp_pj_lapangan }}</p></b>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                Penanggung Jawab Project : <p class="pull-right">{{ $datas->pj_project }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                No. Telp : <b><p class="pull-right">{{ $datas->telp_pj_project }}</p></b>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                Bekerja pada Area GMP : <p class="pull-right">{{ $datas->area_gmp }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                Barang yang disimpan :
                                                <div dir="rtl">
                                                    <ul>
                                                        @foreach(explode(',', $datas->brg_yang_disimpan) as $data)
                                                        <li>{{ $data }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                Lokasi Gudang : <p class="pull-right">{{ $datas->lokasi_gudang }}</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                Jenis Pekerjaan Berbahaya :
                                                <div dir="rtl">
                                                    <ul>
                                                        @foreach(explode(',', $datas->pekerjaan_berbahaya) as $data)
                                                        <li>{{ $data }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                <hr>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                Dokumen Lampiran :
                                                <div dir="rtl">
                                                    <ul>
                                                        @foreach(explode(',', $datas->doc_lampiran) as $data)
                                                        <li>{{ $data }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                <hr>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-9">
                                                Kebutuhan Utility :
                                                <div dir="rtl">
                                                    <ul>
                                                        @foreach(explode(',', $datas->utility) as $data)
                                                        <li>{{ $data }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                Sistem yang akan Terganggu :
                                                <div dir="rtl">
                                                    <ul>
                                                        @foreach(explode(',', $datas->sistem_terganggu) as $data)
                                                        <li>{{ $data }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dissmiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
