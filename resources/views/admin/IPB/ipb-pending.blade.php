@extends('admin.template.pending')

@section('jenis')
IPB
@endsection

@section('pending-datatable')
  @if( $IPB_pending == 0 )
  <div class="box-body">
      <p>Tidak ada IPB yang sedang menunggu persetujuan</p>
  </div>
  @else
  <tr>
    <th>No IKO</th>
    <th>Nama Kontraktor</th>
    <th>Nama Pekerjaan</th>
    <th>Jenis Pekerjaan</th>
    <th>Lokasi Pekerjaan</th>
    <th>Jenis Pekerjaan Berbahaya</th>
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
      <td>
        <ul>
          @foreach ( explode(' ', $ipb->pekerjaan_berbahaya) as $jenis)
            <li>{{ $jenis }}</li>
          @endforeach
        </ul>
      </td>
      <td>
        <button type="button" class="btn btn-primary btn-xs">Detail</button>
        <button type="button" class="btn btn-success btn-xs">Approve</button>
      </td>
    </tr>
  @endforeach
@endsection
