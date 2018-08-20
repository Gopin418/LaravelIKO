@extends('admin')

@section('content-header')
Approval Utility
@endsection

@section('breadcrumb')
<li class="active">Approval Utility</li>
@endsection

@section('content')

<div class="row mb-5">

  {{-- Air --}}
  <div class="col-xs-6">
    <div class="box">

      {{-- Header --}}
      <div class="box-header">
        <h3>Air</h3>
      </div>

      {{-- Body Air --}}
      <div class="box-body">
        <form action="/admin/utility/air/{{ $air->id }}" method="post">
          {{ csrf_field() }}

          {{-- Nama --}}
          <div class="form-group">
            <label for="nama_air">Nama</label>
            <input type="text" name="name_air" class="form-control" placeholder="e.g Alvin Ardiansyah" value="{{ $air->name }}">
          </div>

          {{-- email --}}
          <div class="form-group">
            <label for="email_pj_air">Email</label>
            <input type="email" name="email_pj_air" class="form-control" placeholder="e.g alvinardiansyah@example.com" value="{{ $air->email }}">
          </div>

          {{-- Telepon --}}
          <div class="form-group">
            <label for="telp_pj_air">No. Telp</label>
            <input type="text" name="telp_pj_air" class="form-control" placeholder="e.g 08983201224" value="{{ $air->telp }}">
          </div>

          {{-- Departement --}}
          <div class="form-group">
              <label for="departement_air">Departement</label>
              <select class="form-control select2" name="departement_air">
                  @foreach($departement as $dept)
                    <option value="{{ $dept->departement }}"
                      @if($dept->departement == $air->departement)
                        selected="selected"
                      @endif
                      >
                        {{ $dept->departement }}
                      </option>
                  @endforeach
              </select>
          </div>

          {{-- Submit --}}
          <div class="form-group">
            <input type="hidden" name="_method" value="PUT">
            <input type="submit" name="submit" value="Save" class="btn btn-primary col-xs-2">
          </div>

        </form>
      </div>

    </div>
  </div>

  {{-- Angin --}}
  <div class="col-xs-6">
    <div class="box">

      {{-- Header --}}
      <div class="box-header">
        <h3>Angin</h3>
      </div>

      {{-- Body --}}
      <div class="box-body">
        <form action="/admin/utility/angin/{{ $angin->id }}" method="post">
          {{ csrf_field() }}

          {{-- Nama --}}
          <div class="form-group">
            <label for="nama_angin">Nama</label>
            <input type="text" name="name_angin" class="form-control" placeholder="e.g Alvin Ardiansyah" value="{{ $angin->name }}">
          </div>

          {{-- email --}}
          <div class="form-group">
            <label for="email_pj_angin">Email</label>
            <input type="email" name="email_pj_angin" class="form-control" placeholder="e.g alvinardiansyah@example.com" value="{{ $angin->email }}">
          </div>

          {{-- Telepon --}}
          <div class="form-group">
            <label for="telp_pj_angin">No. Telp</label>
            <input type="text" name="telp_pj_angin" class="form-control" placeholder="e.g 08983201224" value="{{ $angin->telp }}">
          </div>

          {{-- Departement --}}
          <div class="form-group">
              <label for="departement_angin">Departement</label>
              <select class="form-control select2" name="departement_angin">
                  @foreach ($departement as $dept)
                    <option value="{{ $dept->departement }}"
                      @if($dept->departement == $angin->departement)
                        selected=="selected"
                      @endif
                      >
                      {{ $dept->departement }}
                    </option>
                  @endforeach
              </select>
          </div>

          {{-- Submit --}}
          <div class="form-group">
            <input type="hidden" name="_method" value="PUT">
            <input type="submit" name="submit" value="Save" class="btn btn-primary col-xs-2">
          </div>

        </form>
      </div>

    </div>
  </div>

</div>

<div class="row">

  {{-- Listrik --}}
  <div class="col-xs-6">
    <div class="box">

      {{-- Header --}}
      <div class="box-header">
        <h3>Listrik</h3>
      </div>

      {{-- Body --}}
      <div class="box-body">
        <form action="/admin/utility/listrik/{{ $listrik->id }}" method="post">
          {{ csrf_field() }}

          {{-- Nama --}}
          <div class="form-group">
            <label for="nama_listrik">Nama</label>
            <input type="text" name="name_listrik" class="form-control" placeholder="e.g Alvin Ardiansyah" value="{{ $listrik->name }}">
          </div>

          {{-- email --}}
          <div class="form-group">
            <label for="email_pj_listrik">Email</label>
            <input type="email" name="email_pj_listrik" class="form-control" placeholder="e.g alvinardiansyah@example.com" value="{{ $listrik->email }}">
          </div>

          {{-- Telepon --}}
          <div class="form-group">
            <label for="telp_pj_listrik">No. Telp</label>
            <input type="text" name="telp_pj_listrik" class="form-control" placeholder="e.g 08983201224" value="{{ $listrik->telp }}">
          </div>

          {{-- Departement --}}
          <div class="form-group">
              <label for="departement_listrik">Departement</label>
              <select class="form-control select2" name="departement_listrik">
                  @foreach ($departement as $dept)
                    <option value="{{ $dept->departement }}"
                      @if($dept->departement == $listrik->departement)
                        selected="selected"
                      @endif
                      >
                      {{ $dept->departement }}
                    </option>
                  @endforeach
              </select>
          </div>

          {{-- Submit --}}
          <div class="form-group">
            <input type="hidden" name="_method" value="PUT">
            <input type="submit" name="submit" value="Save" class="btn btn-primary col-xs-2">
          </div>

        </form>
      </div>

    </div>
  </div>

  {{-- Steam --}}
  <div class="col-xs-6">
    <div class="box">

      {{-- Header --}}
      <div class="box-header">
        <h3>Steam</h3>
      </div>

      {{-- Body --}}
      <div class="box-body">
        <form action="/admin/utility/steam/{{ $steam->id }}" method="post">
          {{ csrf_field() }}

          {{-- Nama --}}
          <div class="form-group">
            <label for="nama_steam">Nama</label>
            <input type="text" name="name_steam" class="form-control" placeholder="e.g Alvin Ardiansyah" value="{{ $steam->name }}">
          </div>

          {{-- email --}}
          <div class="form-group">
            <label for="email_pj_steam">Email</label>
            <input type="email" name="email_pj_steam" class="form-control" placeholder="e.g alvinardiansyah@example.com" value="{{ $steam->email }}">
          </div>

          {{-- Telepon --}}
          <div class="form-group">
            <label for="telp_pj_steam">No. Telp</label>
            <input type="text" name="telp_pj_steam" class="form-control" placeholder="e.g 08983201224" value="{{ $steam->telp }}">
          </div>

          {{-- Departement --}}
          <div class="form-group">
              <label for="departement_steam">Departement</label>
              <select class="form-control select2" name="departement_steam">
                  @foreach ($departement as $dept)
                    <option value="{{ $dept->departement }}"
                      @if($dept->departement == $steam->departement)
                        selected="selected"
                      @endif
                      >
                      {{ $dept->departement }}
                    </option>
                  @endforeach
              </select>
          </div>

          {{-- Submit --}}
          <div class="form-group">
            <input type="hidden" name="_method" value="PUT">
            <input type="submit" name="submit" value="Save" class="btn btn-primary col-xs-2">
          </div>

        </form>
      </div>

    </div>
  </div>

</div>


@endsection
