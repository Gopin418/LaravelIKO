@extends('admin.template.approved')

@section('jenis')
IPB
@endsection

@section('approved-datatable')
  @if( $IPB_approved == 0 )
  <div class="box-body">
      <p>Tidak ada data IPB yang tersedia</p>
  </div>
  @else
  <tr>
    <th>No IKO</th>
    <th>Nama Kontraktor</th>
    <th>Nama Pekerjaan</th>
    <th>Jenis Pekerjaan</th>
    <th>Lokasi Pekerjaan</th>
    <th>Tanggal Mulai</th>
    <th>Tanggal Selesai</th>
    <th></th>
  </tr>
  @endif
  @foreach ($ipb as $ipb)
    <tr>
      <td>{{ $ipb->id . ' / IKO / 2018' }}</td>
      <td>{{ $ipb->nama_kontraktor }}</td>
      <td>{{ $ipb->nama_pekerjaan }}</td>
      <td>{{ $ipb->jenis }}</td>
      <td>{{ 'Nutrifood ' . $ipb->lokasi . ', ' . $ipb->area }}</td>
      <td>{{ $ipb->tgl_mulai }}</td>
      <td>{{ $ipb->tgl_selesai }}</td>
      <td>
        <button type="button" class="btn btn-primary btn-xs">Detail</button>
      </td>
    </tr>
  @endforeach
@endsection
