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

      {{-- Body --}}
      <div class="box-body">
        <form action="/admin/utility/air" method="post">
          {{ csrf_field() }}

          {{-- Nama --}}
          <div class="form-group">
            <label for="nama_pj">Nama</label>
            <input type="text" name="name" class="form-control" placeholder="e.g Alvin Ardiansyah" value="{{ $air->name }}">
          </div>

          {{-- email --}}
          <div class="form-group">
            <label for="email_pj">Email</label>
            <input type="email" name="email_pj" class="form-control" placeholder="e.g alvinardiansyah@example.com" value="{{ $air->email }}">
          </div>

          {{-- Telepon --}}
          <div class="form-group">
            <label for="telp_pj">No. Telp</label>
            <input type="text" name="telp_pj" class="form-control" placeholder="e.g 08983201224" value="{{ $air->telp }}">
          </div>

          {{-- Departement --}}
          <div class="form-group">
              <label for="departement">Departement</label>
              <select class="form-control select2" name="departement">
                  @foreach($utility as $departement)
                    <option value="{{ $departement->departement }}"
                      @if($departement->departement == $air->departement)
                        selected="selected"
                      @endif
                      >
                        {{ $departement->departement }}
                      </option>
                  @endforeach
              </select>
          </div>

          {{-- Submit --}}
          <div class="form-group">
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
        <form action="/admin/utility/angin" method="post">
          {{ csrf_field() }}

          {{-- Nama --}}
          <div class="form-group">
            <label for="nama_pj">Nama</label>
            <input type="text" name="name" class="form-control" placeholder="e.g Alvin Ardiansyah" value="{{ $angin->name }}">
          </div>

          {{-- email --}}
          <div class="form-group">
            <label for="email_pj">Email</label>
            <input type="email" name="email_pj" class="form-control" placeholder="e.g alvinardiansyah@example.com" value="{{ $angin->email }}">
          </div>

          {{-- Telepon --}}
          <div class="form-group">
            <label for="telp_pj">No. Telp</label>
            <input type="text" name="telp_pj" class="form-control" placeholder="e.g 08983201224" value="{{ $angin->telp }}">
          </div>

          {{-- Departement --}}
          <div class="form-group">
              <label for="departement">Departement</label>
              <select class="form-control select2" name="departement">
                  @foreach ($utility as $departement)
                    <option value="{{ $departement->departement }}"
                      @if($departement->departement == $angin->departement)
                        selected=="selected"
                      @endif
                      >
                      {{ $departement->departement }}
                    </option>
                  @endforeach
              </select>
          </div>

          {{-- Submit --}}
          <div class="form-group">
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
        <form action="/admin/utility/listrik" method="post">
          {{ csrf_field() }}

          {{-- Nama --}}
          <div class="form-group">
            <label for="nama_pj">Nama</label>
            <input type="text" name="name" class="form-control" placeholder="e.g Alvin Ardiansyah" value="{{ $listrik->name }}">
          </div>

          {{-- email --}}
          <div class="form-group">
            <label for="email_pj">Email</label>
            <input type="email" name="email_pj" class="form-control" placeholder="e.g alvinardiansyah@example.com" value="{{ $listrik->email }}">
          </div>

          {{-- Telepon --}}
          <div class="form-group">
            <label for="telp_pj">No. Telp</label>
            <input type="text" name="telp_pj" class="form-control" placeholder="e.g 08983201224" value="{{ $listrik->telp }}">
          </div>

          {{-- Departement --}}
          <div class="form-group">
              <label for="departement">Departement</label>
              <select class="form-control select2" name="departement">
                  @foreach ($utility as $departement)
                    <option value="{{ $departement->departement }}"
                      @if($departement->departement == $listrik->departement)
                        selected="selected"
                      @endif
                      >
                      {{ $departement->departement }}
                    </option>
                  @endforeach
              </select>
          </div>

          {{-- Submit --}}
          <div class="form-group">
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
        <form action="/admin/utility/steam" method="post">
          {{ csrf_field() }}

          {{-- Nama --}}
          <div class="form-group">
            <label for="nama_pj">Nama</label>
            <input type="text" name="name" class="form-control" placeholder="e.g Alvin Ardiansyah" value="{{ $steam->name }}">
          </div>

          {{-- email --}}
          <div class="form-group">
            <label for="email_pj">Email</label>
            <input type="email" name="email_pj" class="form-control" placeholder="e.g alvinardiansyah@example.com" value="{{ $steam->email }}">
          </div>

          {{-- Telepon --}}
          <div class="form-group">
            <label for="telp_pj">No. Telp</label>
            <input type="text" name="telp_pj" class="form-control" placeholder="e.g 08983201224" value="{{ $steam->telp }}">
          </div>

          {{-- Departement --}}
          <div class="form-group">
              <label for="departement">Departement</label>
              <select class="form-control select2" name="departement">
                  @foreach ($utility as $departement)
                    <option value="{{ $departement->departement }}"
                      @if($departement->departement == $steam->departement)
                        selected="selected"
                      @endif
                      >
                      {{ $departement->departement }}
                    </option>
                  @endforeach
              </select>
          </div>

          {{-- Submit --}}
          <div class="form-group">
            <input type="submit" name="submit" value="Save" class="btn btn-primary col-xs-2">
          </div>

        </form>
      </div>

    </div>
  </div>

</div>


@endsection
