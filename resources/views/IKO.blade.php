<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- jQuerry -->
    <link rel="stylesheet" href="/css/bootstrap.css">


    <!-- css -->
    <link rel="stylesheet" href="/css/font-awesome.css">
    <link rel="stylesheet" href="/css/master.css">
    <link rel="stylesheet" href="/css/datepicker.css">
    <link rel="stylesheet" href="/css/smart_wizard.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HSE - @yield('title')</title>


</head>
<body class="iko">



    <!-- Content Start Here -->
            <div class="col-sm-12 iko-back">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-6">
                            <div class="ikobox">
                                <div class="kuning"></div>
                                <div>
                                    <form action="/IKO" method="post" id="iko-form">
                                        <div id="smartwizard">
                                                <ul hidden>
                                                    <li><a href="#step-1"></a></li>
                                                    <li><a href="#step-2"></a></li>
                                                    <li><a href="#step-3"></a></li>
                                                    <li><a href="#step-4"></a></li>
                                                    <li><a href="#step-5"></a></li>
                                                    <li><a href="#step-6"></a></li>
                                                    <li><a href="#step-7"></a></li>
                                                    <li><a href="#step-8"></a></li>
                                                </ul>

                                                <div class="form">

                                                    {{-- Step 1 --}}
                                                    {{-- Izin Kerja Kontraktor --}}
                                                    <div id="step-1" class="">

                                                        <div class="form">
                                                            {{-- Header --}}
                                                            <h2>Izin Kerja Kontraktor</h2>
                                                            <div class="mt-3">
                                                                <small>Masukkan Nama Project, Jenis Project, dan Periode Pengerjaan</small>
                                                            </div>


                                                            {{-- Nama Project --}}
                                                            <div class="input-group mt-4 kun">
                                                                <input type="text" name="nama_pekerjaan" id="nama_project" class="form-control form-control-md" placeholder="Nama Project" autofocus>
                                                                <div class="help-block with-errors"></div>
                                                            </div>
                                                            {{-- /Nama Project --}}

                                                            {{-- Jenis Project --}}
                                                            <div class="mt-4 kun">
                                                                <input type="radio" name="jenis" id="project" value="Project">
                                                                <label for="project">Project</label>
                                                                    <br>
                                                                <input type="radio" name="jenis" id="maintenance" value="Maintenance">
                                                                <label for="maintenance">Maintenance</label>
                                                            </div>
                                                            {{-- /Jenis Project --}}

                                                            {{-- Periode Pekerjaan --}}
                                                            <div class="mt-4 kun">
                                                                <div class="form-group">
                                                                    <input type="hidden" name="tanggal_mulai" id="tgl_mulai">
                                                                    <input type="text" name="tgl_mulai" id="tanggal_mulai" class="form-control" placeholder="Tanggal Mulai" class="ui-datepicker" style="cursor: pointer;background-color: #fff; color: transparent; text-shadow: 0 0 0 #495057; &:focus{outline:none;}" readonly>
                                                                </div>

                                                                <div class="form-group">
                                                                    <input type="hidden" name="tanggal_selesai" id="tgl_selesai">
                                                                    <input type="text" name="tgl_selesai" id="tanggal_selesai" class="form-control" placeholder="Tanggal Selesai" class="ui-datepicker" style="cursor: pointer;background-color: #fff; color: transparent; text-shadow: 0 0 0 #495057; &:focus{outline:none;}" readonly>
                                                                </div>
                                                            </div>
                                                            {{-- /Periode Pekerjaan --}}

                                                            {{-- Footer Message --}}
                                                            <div class="mt-5">
                                                                <small>
                                                                    *Pastikan anda telah mengisi dengan benar sebelum melanjutkan.
                                                                </small>
                                                            </div>
                                                            {{-- /Footer Message --}}

                                                            {{-- Footer IKO --}}
                                                            <div class="row ">
                                                                    <div class="col">
                                                                        <hr>
                                                                    </div>
                                                                    <div class="col-2 text-center">
                                                                        <small>IKO</small>
                                                                    </div>
                                                                    <div class="col">
                                                                        <hr>
                                                                    </div>
                                                                </div>
                                                        {{-- /Footer IKO --}}

                                                        </div>






                                                    </div>
                                                    {{-- /Izin Kerja Kontraktor --}}
                                                    {{-- /Step 1 --}}

                                                    {{-- Step 2 --}}
                                                    <div id="step-2" class="">

                                                        <div class="form">

                                                            {{-- Header --}}
                                                            <h2>Izin Kerja Kontraktor</h2>
                                                            {{-- /Header --}}

                                                            {{-- Hint Form --}}
                                                            <div class="mt-3">
                                                                <small>Masukkan Nama Kontraktor dan Penanggung Jawab beserta Nomor Telepon yang dapat dihubungi</small>
                                                            </div>
                                                            {{-- /Hint Form --}}


                                                            <!-- Nama Kontraktor -->
                                                            <div class="form-group mt-4 kun">
                                                                <input type="text" name="nama_kontraktor" id="nama_kontraktor" class="form-control input-md" placeholder="Nama Kontraktor" autofocus>
                                                            </div>

                                                            <!-- Penanggung Jawab Kontraktor -->
                                                            <div class="form-group kun">
                                                                <input type="text" name="pj_kontraktor" id="pj_kontraktor" class="form-control input-md" placeholder="Penanggung Jawab Kontraktor">
                                                            </div>

                                                            <!-- No. Telp. Penanggung Jawab Kontraktor -->
                                                            <div class="form-group kun">
                                                                <input type="tel" name="telp_pj_kontraktor" id="telp_pj_kontraktor" class="form-control input-md" placeholder="No. Telp. Penanggung Jawab Kontraktor">
                                                            </div>

                                                            <!-- Penanggung Jawab Lapangan -->
                                                            <div class="form-group kun">
                                                                <input type="text" name="pj_lapangan" id="pj_lapangan" class="form-control input-md" placeholder="Penanggung Jawab Lapangan">
                                                            </div>

                                                            <!-- No. Telp. Penanggung Jawab Lapangan -->
                                                            <div class="form-group kun">
                                                                <input type="tel" name="telp_pj_lapangan" id="telp_pj_lapangan" class="form-control input-md" placeholder="No. Telp Penanggung Jawab Lapangan">
                                                            </div>

                                                            {{-- Footer Message --}}
                                                            <div class="mt-5">
                                                                <small>
                                                                    *Pastikan anda telah mengisi dengan benar sebelum melanjutkan.
                                                                </small>
                                                            </div>
                                                            {{-- /Footer Message --}}
                                                            {{-- Footer IKO --}}
                                                            <div class="row">
                                                                <div class="col"><hr></div>
                                                                <div class="col-2 text-center">
                                                                    <small>IKO</small>
                                                                </div>
                                                                <div class="col"><hr></div>
                                                            </div>
                                                            {{-- /Footer IKO --}}

                                                        </div>



                                                    </div>
                                                    {{-- /Step 2 --}}

                                                    {{-- Step 3 --}}
                                                    <div id="step-3" class="">

                                                        <div class="form">

                                                            {{-- Header --}}
                                                            <h2>Izin Kerja Kontraktor</h2>
                                                            {{-- /Header --}}

                                                            {{-- Hint --}}
                                                            <div class="mt-3">
                                                                <small>
                                                                    Masukkan Nama Penanggung Jawab Project beserta No. Telp. yang dapat dihubungi
                                                                </small>
                                                            </div>
                                                            {{-- /Hint --}}

                                                            {{-- Nama Penanggung Jawab Project --}}
                                                            <div class="form-group kun mt-4">
                                                                <input type="text" name="pj_project" id="pj_project" class="form-control" placeholder="Penanggung Jawab Project" autofocus>
                                                            </div>
                                                            {{-- /Nama Penanggung Jawab Project --}}

                                                            {{-- No Telp Penanggung Jawab --}}
                                                            <div class="form-group kun">
                                                                <input type="tel" name="telp_pj_project" id="telp_pj_project" class="form-control" placeholder="No. Telp.">
                                                            </div>
                                                            {{-- /No Telp Penanggung Jawab --}}

                                                            {{-- Footer Message --}}
                                                            <div class="mt-5">
                                                                <small>
                                                                    *Pastikan anda telah mengisi dengan benar sebelum melanjutkan
                                                                </small>
                                                            </div>
                                                            {{-- /Footer Message --}}

                                                            {{-- Footer IKO --}}
                                                            <div class="row">
                                                                <div class="col"><hr></div>
                                                                <div class="col-2 text-center">
                                                                    <small>IKO</small>
                                                                </div>
                                                                <div class="col"><hr></div>
                                                            </div>
                                                            {{-- /Footer IKO --}}

                                                        </div>

                                                    </div>
                                                    {{-- /Step 3 --}}

                                                    {{-- Step 4 --}}
                                                    <div id="step-4" class="">

                                                        <div class="form">

                                                            {{-- Header --}}
                                                            <h2>Izin Kerja Kontraktor</h2>
                                                            {{-- /Header --}}

                                                            {{-- Hint --}}
                                                            <div class="mt-3"><small>Silahkan Pilih Lokasi Pelaksanaan Project</small></div>
                                                            {{-- /Hint --}}

                                                            {{-- Radio Lokasi --}}

                                                            {{-- Ciawi --}}
                                                            <div class="form-group kun mt-4 mb-1">
                                                                <input type="radio" name="lokasi" id="ciawi" value="Ciawi">
                                                                <label for="ciawi">Ciawi</label>
                                                            </div>
                                                            {{-- /Ciawi --}}

                                                            <div class="form-group kun">
                                                                <input type="radio" name="lokasi" id="cibitung" value="Cibitung">
                                                                <label for="cibitung">Cibitung</label>
                                                            </div>

                                                            {{-- /Radio Lokasi --}}

                                                            {{-- Footer Message --}}
                                                            <div class="mt-5">
                                                                <small>*Pastikan anda telah memilih lokasi yang benar sebelum melanjutkan</small>
                                                            </div>
                                                            {{-- /Footer Message --}}

                                                            {{-- Footer --}}
                                                            <div class="row">
                                                                <div class="col">
                                                                    <hr>
                                                                </div>
                                                                <div class="col-2 text-center"><small>IKO</small></div>
                                                                <div class="col">
                                                                    <hr>
                                                                </div>
                                                            </div>
                                                            {{-- /Footer --}}

                                                        </div>

                                                    </div>
                                                    {{-- /Step 4 --}}

                                                    {{-- Step 5 --}}
                                                    <div id="step-5" class="">

                                                        <div class="form">

                                                            {{-- Header --}}
                                                            <h2>Izin Kerja Kontraktor</h2>
                                                            {{-- /Header --}}

                                                            {{-- Hint --}}
                                                            <div class="mt-3">
                                                                <small>
                                                                    Masukkan Deskripsi Project dan Lokasi Area Pengerjaan Project
                                                                </small>
                                                            </div>
                                                            {{-- /Hint --}}

                                                            {{-- Deskripsi --}}
                                                            <div class="form-group mt-3 kun">
                                                                <textarea name="deskripsi" id="desc_project" class="form-control input-md"  rows="10" placeholder="Deskripsi Project" autofocus></textarea>
                                                            </div>
                                                            {{-- /Deskripsi --}}

                                                            {{-- Lokasi --}}
                                                            <div class="form-group kun">
                                                                <input type="text" name="area" id="lokasi_project" placeholder="Area Project" class="form-control inpput-md">
                                                            </div>
                                                            {{-- /Lokasi --}}


                                                            {{-- Footer Message --}}
                                                            <div class="mt-5">
                                                                <small>
                                                                    *Pastikan anda telah mengisi dengan benar sebelum melanjutkan.
                                                                </small>
                                                            </div>
                                                            {{-- /Footer Message --}}


                                                            {{-- Footer --}}
                                                            <div class="row">
                                                                <div class="col">
                                                                    <hr>
                                                                </div>
                                                                <div class="col-2 text-center">
                                                                    <small>IKO</small>
                                                                </div>
                                                                <div class="col">
                                                                    <hr>
                                                                </div>
                                                            </div>
                                                            {{-- /Footer --}}

                                                        </div>

                                                    </div>
                                                    {{-- /Step 5 --}}

                                                    {{-- Step 6 --}}
                                                    <div id="step-6" class="">

                                                        <div class="form">

                                                            {{-- Header --}}
                                                            <h2>Izin Kerja Kontraktor</h2>
                                                            {{-- /Header --}}

                                                            {{-- Hint --}}
                                                            <div class="mt-3">
                                                                <small>
                                                                    Silahkan Pilih jenis Area dan Masukkan nama barang dan peralatan yang akan disimpan beserta lokasi gudang.
                                                                </small>
                                                            </div>
                                                            {{-- /Hint --}}

                                                            {{-- Area GMP --}}
                                                            <div class="form-group kun mt-3">
                                                                <input type="checkbox" name="area_gmp" id="area_gmp" value="Ya">
                                                                <label for="area_gmp">Bekerja Pada Area GMP</label>
                                                                <br>
                                                                <small>*Jangan dicheck/Abaikan jika tidak bekerja pada area GMP</small>
                                                            </div>
                                                            {{-- /Area GMP --}}

                                                            {{-- Barang dan Peralatan yang disimpan --}}
                                                            <div class="form-group" id="gmp">

                                                                <div class="input-group mb-2 kun" id="gmp_template">
                                                                    <input type="text" name="brg_yang_disimpan[]" id="barang" class="form-control" placeholder="Alat dan Barang yang disimpan">
                                                                    <div class="input-group-append">
                                                                        <button class="btn btn-danger" id="gmp_remove_current"><span class="fa fa-minus"></span></button>
                                                                        <button class="btn btn-success" id="gmp_add"><span class="fa fa-plus"></span></button>
                                                                    </div>
                                                                </div>


                                                                <div id="gmp_noforms_template"></div>

                                                                <small><kbd>Click <span class="fa fa-plus"></span> to Add fields</kbd></small><br>
                                                                <small><kbd>Click <span class="fa fa-minus"></span> to Remove fields</kbd></small>

                                                            </div>

                                                            {{-- /Barang dan peralatan yang disimpan --}}

                                                            {{-- Lokasi Gudang --}}
                                                            <div class="form-group kun">
                                                                <input type="text" name="lokasi_gudang" id="lokasi_gudang" class="form-control" placeholder="Lokasi Gudang Penyimpanan">
                                                            </div>
                                                            {{-- /Lokasi Gudang --}}

                                                            {{-- Footer Message --}}
                                                            <div class="mt-5">
                                                                <small>*Pastikan anda telah mengisi dengan benar sebelum melanjutkan</small>
                                                            </div>
                                                            {{-- /Footer Message --}}

                                                            <div class="row">
                                                                <div class="col">
                                                                    <hr>
                                                                </div>
                                                                <div class="col-2 text-center"><small>IKO</small></div>
                                                                <div class="col">
                                                                    <hr>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>
                                                    {{-- /Step 6 --}}

                                                    {{-- Step 7 --}}
                                                    <div id="step-7" class="">

                                                        <div class="form">

                                                        {{-- Header --}}
                                                        <h2>Izin Kerja Kontraktor</h2>
                                                        {{-- /Header --}}

                                                        {{-- Hint --}}
                                                        <div class="mt-3"><small>Silahkan masukkan catatan project.</small></div>
                                                        {{-- /Hint --}}

                                                        {{-- Jenis Pekerjaan Berbahaya --}}
                                                        <div class="form-group">
                                                            <div class="mt-4 mb-2">
                                                                Pekerjaan Berbahaya
                                                            </div>

                                                            <div id="check-ipb">
                                                              {{-- Api --}}
                                                              <div class="mt-1 kun">
                                                                <input type="checkbox" name="pekerjaan_berbahaya[]" id="api" value="Api">
                                                                <label for="api">Api / Kebakaran</label>
                                                              </div>
                                                              {{-- /Api --}}
                                                              {{-- Ketinggian --}}
                                                              <div class="kun">
                                                                <input type="checkbox" name="pekerjaan_berbahaya[]" id="ketinggian" value="Ketinggian">
                                                                <label for="ketinggian">Ketinggian >2 m</label>
                                                              </div>
                                                              {{-- /Ketinggian --}}
                                                              {{-- Ruang Terbatas --}}
                                                              <div class="kun">
                                                                <input type="checkbox" name="pekerjaan_berbahaya[]" id="ruang_terbatas" value="Ruang Terbatas">
                                                                <label for="ruang_terbatas">Ruang Terbatas</label>
                                                              </div>
                                                              {{-- /Ruang Terbatas --}}
                                                            </div>
                                                            <div id="check-kimia">
                                                              {{-- Bahan Kimia Berbahaya --}}
                                                              <div class="kun">
                                                                <input type="checkbox" name="pekerjaan_berbahaya[]" id="kimia" value="Bahan Kimia Berbahaya">
                                                                <label for="kimia">Bahan kimia Berbahaya</label>
                                                              </div>
                                                              {{-- /Bahan Kimia Berbahaya --}}
                                                            </div>
                                                        </div>
                                                        {{-- /Jenis Pekerjaan Berbahaya --}}

                                                        {{-- Dokumen Lampiran --}}
                                                        <div class="form-group">
                                                            <div class="mt-4 mb-2">
                                                                Dokumen Lampiran yang dibutuhkan
                                                            </div>
                                                            {{-- IPB --}}
                                                            <div class="kun">
                                                                <input type="checkbox" name="doc_lampiran[]" id="ipb" value="IPB">
                                                                <label>IPB</label>
                                                            </div>
                                                            {{-- /IPB --}}
                                                            {{-- MSDS --}}
                                                            <div class="kun">
                                                                <input type="checkbox" name="doc_lampiran[]" id="msds" value="MSDS">
                                                                <label>MSDS</label>
                                                            </div>
                                                            {{-- /MSDS --}}
                                                            {{-- SO --}}
                                                            <div class="kun">
                                                                <input type="checkbox" name="doc_lampiran[]" id="so" value="SO" checked>
                                                                <label>Struktur Organisasi</label>
                                                            </div>
                                                            {{-- /SO --}}
                                                        </div>
                                                        {{-- /Dokumen Lampiran --}}

                                                        {{-- Kebutuhan Utility --}}
                                                        <div class="form-group">
                                                            <div class="mt-4 mb-2">
                                                                Kebutuhan Utility dan lainnya
                                                            </div>
                                                            <div class="row kun">
                                                                <div class="col-2">
                                                                    <input type="checkbox" name="utility[]" id="air" value="Air">
                                                                    <label for="air">Air</label>
                                                                </div>
                                                                <div class="col-10">
                                                                    <div id="form_pj_air">
                                                                      <div class="row no-gutters">
                                                                          <div class="col">
                                                                              <input type="text" name="pj_utility" id="pj_air" class="form-control" value="Penanggung Jawab utility" placeholder="nama" disabled>
                                                                          </div>
                                                                          <div class="ml-1"></div>
                                                                          <div class="col-2">
                                                                              <input type="text" name="departement_pj_util" id="dept_pj_air" class="form-control" value="dept" placeholder="dept" disabled>
                                                                          </div>
                                                                      </div>
                                                                      <div class="row mt-1 mb-4 no-gutters">
                                                                          <div class="col">
                                                                              <input type="email" name="tel_pj" id="email_pj_air" class="form-control" value="Email Penanggung Jawab" placeholder="email" disabled>
                                                                          </div>
                                                                          <div class="ml-1"></div>
                                                                          <div class="col-4">
                                                                              <input type="tel" name="email_pj" id="telp_pj_air" class="form-control" value="Telp" placeholder="telp" disabled>
                                                                          </div>
                                                                      </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row kun">
                                                                <div class="col-2">
                                                                    <input type="checkbox" name="utility[]" id="angin" value="Angin">
                                                                    <label for="angin">Angin</label>
                                                                </div>
                                                                <div class="col-10">
                                                                    <div class="row no-gutters">
                                                                        <div class="col">
                                                                            <input type="text" name="pj_utility" id="pj_angin" class="form-control" value="Penanggung Jawab Utility" placeholder="nama" disabled>
                                                                        </div>
                                                                        <div class="ml-1"></div>
                                                                        <div class="col-2">
                                                                            <input type="text" name="departement_pj_util" id="dept_pj_angin" class="form-control" value="dept" placeholder="departement" disabled>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mt-1 mb-4 no-gutters">
                                                                        <div class="col">
                                                                            <input type="email" name="tel_pj" id="email_pj_angin" class="form-control" value="Email Penanggung Jawab" placeholder="email" disabled>
                                                                        </div>
                                                                        <div class="ml-1"></div>
                                                                        <div class="col-4">
                                                                            <input type="tel" name="email_pj" id="telp_pj_angin" class="form-control" value="Telp" placeholder="telp" disabled>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row kun">
                                                                <div class="col-2">
                                                                    <input type="checkbox" name="utility[]" id="listrik" value="Listrik">
                                                                    <label for="listrik">Listrik</label>
                                                                </div>
                                                                <div class="col-10">
                                                                    <div class="row no-gutters">
                                                                        <div class="col">
                                                                            <input type="text" name="pj_utility" id="pj_listrik" class="form-control" value="Penanggung Jawab Utility" placeholder="nama" disabled>
                                                                        </div>
                                                                        <div class="ml-1"></div>
                                                                        <div class="col-2">
                                                                            <input type="text" name="departement_pj_util" id="dept_pj_listrik" class="form-control" value="dept" placeholder="departement" disabled>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mt-1 mb-4 no-gutters">
                                                                        <div class="col">
                                                                            <input type="email" name="tel_pj" id="email_pj_listrik" class="form-control" value="Email Penanggung Jawab" placeholder="email" disabled>
                                                                        </div>
                                                                        <div class="ml-1"></div>
                                                                        <div class="col-4">
                                                                            <input type="tel" name="email_pj" id="telp_pj_listrik" class="form-control" value="Telp" placeholder="telp" disabled>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row kun">
                                                                <div class="col-2">
                                                                    <input type="checkbox" name="utility[]" id="steam" value="Steam">
                                                                    <label for="steam">Steam</label>
                                                                </div>
                                                                <div class="col-10">
                                                                    <div class="row no-gutters">
                                                                        <div class="col">
                                                                            <input type="text" name="pj_utility" id="pj_steam" class="form-control" value="Penanggung Jawab Utility" placeholder="nama" disabled>
                                                                        </div>
                                                                        <div class="ml-1"></div>
                                                                        <div class="col-2">
                                                                            <input type="text" name="departement_pj_util" id="dept_pj_steam" class="form-control" value="dept" placeholder="departement" disabled>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mt-1 mb-4 no-gutters">
                                                                        <div class="col">
                                                                            <input type="email" name="tel_pj" id="email_pj_steam" class="form-control" value="Email Penanggung Jawab" placeholder="email" disabled>
                                                                        </div>
                                                                        <div class="ml-1"></div>
                                                                        <div class="col-4">
                                                                            <input type="tel" name="email_pj" id="telp_pj_steam" class="form-control" value="Telp" placeholder="telp" disabled>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        {{-- /Kebutuhan Utility --}}

                                                        {{-- Sistem yang akan terganggu --}}
                                                        <div class="form-group">
                                                            <div class="mt-4 mb-2">
                                                                Sistem yang akan terganggu
                                                            </div>
                                                            <div class="kun">
                                                                <input type="checkbox" name="sistem_terganggu[]" id="fire" value="Fire Alarm">
                                                                <label for="fire">Fire Alarm</label>
                                                            </div>
                                                            <div class="kun">
                                                                <input type="checkbox" name="sistem_terganggu[]" id="pest" value="Pest Control">
                                                                <label for="pest">Pest Control</label>
                                                            </div>
                                                            <div class="kun">
                                                                <input type="checkbox" name="sistem_terganggu[]" id="lalin" value="Lalu Lintas">
                                                                <label for="lalin">Lalu Lintas</label>
                                                            </div>
                                                            <div class="kun">
                                                                <input type="checkbox" name="sistem_terganggu[]" id="lainnya" value="">
                                                                <label for="lainnya">Lainnya</label>
                                                            </div>
                                                            <div class="form-group" id="lain" style="visibility : hidden;">

                                                                {{-- template --}}
                                                                <div class="input-group mb-2 kun" id="lain_template">
                                                                    <input type="text" name="terganggu[]" id="lain_text" class="form-control" placeholder="Sistem Lainnya">
                                                                    <div class="input-group-append">
                                                                        <button class="btn btn-danger" id="lain_remove_current"><span class="fa fa-minus"></span></button>
                                                                        <button class="btn btn-success" id="lain_add"><span class="fa fa-plus"></span></button>
                                                                    </div>
                                                                </div>
                                                                {{-- /template --}}

                                                                {{-- no template --}}
                                                                <div id="lain_noforms_template"></div>
                                                                {{-- /no template --}}

                                                            </div>
                                                        </div>
                                                        {{-- /Sistem yang akan terganggu --}}

                                                        {{-- Footer Message --}}

                                                                <small>
                                                                    *Pastikan anda telah mengisi dengan benar sebelum melanjutkan.
                                                                </small>

                                                            {{-- /Footer Message --}}


                                                            {{-- Footer --}}
                                                            <div class="row">
                                                                <div class="col">
                                                                    <hr>
                                                                </div>
                                                                <div class="col-2 text-center">
                                                                    <small>IKO</small>
                                                                </div>
                                                                <div class="col">
                                                                    <hr>
                                                                </div>
                                                            </div>
                                                            {{-- /Footer --}}

                                                        </div>

                                                    </div>
                                                    {{-- /Step 7 --}}

                                                    {{-- Step 8 --}}
                                                    <div id="step-8" class="">

                                                        <div class="form">

                                                            <h2>Syarat dan Ketentuan</h2>

                                                            <div class="mt-3">
                                                                <ul>
                                                                    <li>Seragam Kontraktor atau identitas wajib digunakan selama project</li>
                                                                    <li>APD wajib digunakan</li>
                                                                    <li>Sampah bekas project harus dibersihkan dan dibawa keluar area Nutrifood</li>
                                                                    <li>Area atau lokasi project harus dibatasi</li>
                                                                    <li>Jika terjadi pelanggaran, akan diterbitkan Laporan Ketidaksesuaian K3 atau Lingkungan (LKK ata LKL) dan mengurangi penilaian kontraktor</li>
                                                                </ul>
                                                            </div>

                                                                {{-- Footer --}}
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <hr>
                                                                    </div>
                                                                    <div class="col-2 text-center">
                                                                        <small>IKO</small>
                                                                    </div>
                                                                    <div class="col">
                                                                        <hr>
                                                                    </div>
                                                                </div>
                                                                {{-- /Footer --}}

                                                        </div>

                                                    </div>
                                                    {{-- /Step 8 --}}

                                                </div>

                                            </div>

                                        </div>
                                            <input type="hidden" name="status" value="Pending">
                                            <input type="submit" value="Submit" class="btn btn-primary sw-btn-finish float-right col-lg-2" id="submit">
                                            {{ csrf_field() }}
                                    </form>
                                </div>
                                <div class="mb-5 text-center">
                                    <abbr title="Copyright">&copy; GopZ CodeWork</abbr>
                                    <br>
                                    <abbr title="Framework">Powered by Laravel & Bootstrap</abbr>
                                </div>
                            </div>

                    </div>

                </div>
            </div>

    <!-- Content End Here -->

{{-- jQuery Script here --}}
<script src="/js/jquery.js"></script>
</script>

<script src="/js/jquery.sheepItPlugin.js"></script>
{{-- Daterange --}}
<script src="/js/jquery-ui.js"></script>
{{-- Smart Wizard --}}
<script src="/js/jquery.smartWizard.js"></script>
<script>

    $(document).ready(function () {

        $('#tanggal_mulai').datepicker({
            showAnim : "fadeIn",
            dateFormat : "DD, d MM, yy",
            altField : "#tgl_mulai",
            altFormat : "yy-mm-dd",
            dayNamesMin: [
                "Min",
                "Sen",
                "Sel",
                "Rab",
                "Kam",
                "Jum",
                "Sab"
            ],
            dayNames: [
                "Minggu",
                "Senin",
                "Selasa",
                "Rabu",
                "Kamis",
                "Jum'at",
                "Sabtu"
            ],
            monthNames: [
                "Januari",
                "Februari",
                "Maret",
                "April",
                "Mei",
                "Juni",
                "Juli",
                "Agustus",
                "September",
                "Oktober",
                "November",
                "Desember"
            ],
            monthNamesShort: [
                "Jan",
                "Feb",
                "Mar",
                "Apr",
                "Mei",
                "Jun",
                "Jul",
                "Agu",
                "Sep",
                "Okt",
                "Nov",
                "Des"
            ],
        "firstDay": 1
        });

        $('#tanggal_selesai').datepicker({
            showAnim : "fadeIn",
            dateFormat : "DD, d MM, yy",
            altField : "#tgl_selesai",
            altFormat : "yy-mm-dd",
            dayNamesMin: [
                "Min",
                "Sen",
                "Sel",
                "Rab",
                "Kam",
                "Jum",
                "Sab"
            ],
            dayNames: [
                "Minggu",
                "Senin",
                "Selasa",
                "Rabu",
                "Kamis",
                "Jum'at",
                "Sabtu"
            ],
            monthNames: [
                "Januari",
                "Februari",
                "Maret",
                "April",
                "Mei",
                "Juni",
                "Juli",
                "Agustus",
                "September",
                "Oktober",
                "November",
                "Desember"
            ],
            monthNamesShort: [
                "Jan",
                "Feb",
                "Mar",
                "Apr",
                "Mei",
                "Jun",
                "Jul",
                "Agu",
                "Sep",
                "Okt",
                "Nov",
                "Des"
            ],
        "firstDay": 1
        });

        $('#smartwizard').smartWizard({
            selected: 0,
            keyNavigation: false,
            autoAdjustHeight: false,
            cycleSteps: false,
            backButtonSupport: false,
            toolbarSettings: {
                showPreviousButton: true
            },
            useURLHash: true,
            transitionEffect: 'fade',
            transitionSpeed: '400',
            labelFinish: 'Submit',
            enableFinishButton: true
        });



        $('#gmp').sheepIt({
            separator: '',
            allowRemoveCurrent: true,
            allowAdd: true,
            minFormsCount: 1,
            iniFormsCount: 1
        });

        $('#lain').sheepIt({
            separator: '',
            allowRemoveCurrent: true,
            allowAdd: true,
            minFormsCount: 1,
            iniFormsCount: 1
        });

        $('#air').click(function () {
            if($('#air').is(':checked')) {
              $('#pj_air').val('{{ $air->name }}');
              $('#dept_pj_air').val('{{ $air->departement }}');
              $('#email_pj_air').val('{{ $air->email }}');
              $('#telp_pj_air').val('{{ $air->telp }}');
            } else {
                $('#pj_air').val('Penanggung Jawab Utility');
                $('#dept_pj_air').val('dept');
                $('#email_pj_air').val('Email Penanggung Jawab');
                $('#telp_pj_air').val('Telp');
            }
        });

        $('#angin').click(function () {
            if($('#angin').is(':checked')) {
              $('#pj_angin').val('{{ $angin->name }}');
              $('#dept_pj_angin').val('{{ $angin->departement }}');
              $('#email_pj_angin').val('{{ $angin->email }}');
              $('#telp_pj_angin').val('{{ $angin->telp }}');
            } else {
              $('#pj_angin').val('Penanggung Jawab Utility');
              $('#dept_pj_angin').val('dept');
              $('#email_pj_angin').val('Email Penanggung Jawab');
              $('#telp_pj_angin').val('Telp');
            }
        });

        $('#listrik').click(function () {
            if($('#listrik').is(':checked')) {
              $('#pj_listrik').val('{{ $listrik->name }}');
              $('#dept_pj_listrik').val('{{ $listrik->departement }}');
              $('#email_pj_listrik').val('{{ $listrik->email }}');
              $('#telp_pj_listrik').val('{{ $listrik->telp }}');
            } else {
              $('#pj_listrik').val('Penanggung Jawab Utility');
              $('#dept_pj_listrik').val('dept');
              $('#email_pj_listrik').val('Email Penanggung Jawab');
              $('#telp_pj_listrik').val('Telp');
            }
        });

        $('#steam').click(function () {
            if($('#steam').is(':checked')) {
              $('#pj_steam').val('{{ $steam->name }}');
              $('#dept_pj_steam').val('{{ $steam->departement }}');
              $('#email_pj_steam').val('{{ $steam->email }}');
              $('#telp_pj_steam').val('{{ $steam->telp }}');
            } else {
              $('#pj_steam').val('Penanggung Jawab Utility');
              $('#dept_pj_steam').val('dept');
              $('#email_pj_steam').val('Email Penanggung Jawab');
              $('#telp_pj_steam').val('Telp');
            }
        });

        $('#lainnya').click(function () {
            if($('#lainnya').is(':checked')) {
                $('#lain').css('visibility', 'visible');
                $('#lain_text').val('');
                $('#lain_text').focus();
            } else {
                $('#lain').css('visibility', 'hidden');

            }
        });

        $('#check-ipb').change(function() {
          if($('#api').is(':checked') || $('#ketinggian').is(':checked') || $('#ruang_terbatas').is(':checked')) {
            $('#ipb').prop('checked', true);
          } else {
            $('#ipb').prop('checked', false);
          }
        });

        $('#check-kimia').change(function() {
          if($('#kimia').is(':checked')){
            $('#msds').prop('checked', true);
          } else {
            $('#msds').prop('checked', false);
          }
        })

    });
</script>

</body>
</html>
