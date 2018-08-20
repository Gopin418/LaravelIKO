<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <script src="/js/jquery.js"></script>
    
    <script src="/js/bootstrap.bundle.js"></script>

    
    <link rel="stylesheet" href="/css/bootstrap.css">
    <!-- css -->
    <link rel="stylesheet" href="/css/font-awesome.css">
    <link rel="stylesheet" href="/css/master.css">
    <link rel="stylesheet" href="/css/datepicker.css">
    <link rel="stylesheet" href="/css/smart_wizard.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HSE - <?php echo $__env->yieldContent('title'); ?></title>


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

                                                    
                                                    
                                                    <div id="step-1" class="">

                                                        <div class="form">
                                                            
                                                            <h2>Izin Kerja Kontraktor</h2>
                                                            <div class="mt-3">
                                                                <small>Masukkan Nama Project, Jenis Project, dan Periode Pengerjaan</small>
                                                            </div>


                                                            
                                                            <div class="input-group mt-4 kun"
                                                            data-toggle="popover" data-trigger="hover" data-placement="left" data-content="Masukkan Nama Pekerjaan">
                                                                <input type="text" name="nama_pekerjaan" id="nama_project"
                                                                  data-toggle="popover" data-trigger="focus" data-placement="left" data-content="Masukkan Nama Pekerjaan"
                                                                  class="form-control form-control-md" placeholder="Nama Project">
                                                                <div class="help-block with-errors"></div>
                                                            </div>
                                                            

                                                            
                                                            <div class="mt-4 kun"
                                                            data-toggle="popover" data-trigger="hover" data-placement="left" data-content="Pilih Jenis Pekerjaan"
                                                            >
                                                                <input type="radio" name="jenis" id="project" value="Project">
                                                                <label for="project">Project</label>
                                                                    <br>
                                                                <input type="radio" name="jenis" id="maintenance" value="Maintenance">
                                                                <label for="maintenance">Maintenance</label>
                                                            </div>
                                                            

                                                            
                                                            <div class="mt-4 kun">
                                                                <div class="form-group"
                                                                data-toggle="popover" data-trigger="hover" data-placement="left" data-content="Pilih Tanggal Mulai">
                                                                    <input type="hidden" name="tanggal_mulai" id="tgl_mulai">
                                                                    <input type="text" name="tgl_mulai" id="tanggal_mulai" class="form-control"
                                                                    data-toggle="popover" data-trigger="focus" data-placement="left" data-content="Pilih Tanggal Mulai"
                                                                    placeholder="Tanggal Mulai" class="ui-datepicker" style="cursor: pointer;background-color: #fff; color: transparent; text-shadow: 0 0 0 #495057; &:focus{outline:none;}" readonly>
                                                                </div>

                                                                <div class="form-group"
                                                                data-toggle="popover" data-trigger="hover" data-placement="left" data-content="Pilih Tanggal Selesai">
                                                                    <input type="hidden" name="tanggal_selesai" id="tgl_selesai">
                                                                    <input type="text" name="tgl_selesai" id="tanggal_selesai" class="form-control"
                                                                    data-toggle="popover" data-trigger="focus" data-placement="left" data-content="Pilih Tanggal Selesai"
                                                                    placeholder="Tanggal Selesai" class="ui-datepicker" style="cursor: pointer;background-color: #fff; color: transparent; text-shadow: 0 0 0 #495057; &:focus{outline:none;}" readonly>
                                                                </div>
                                                            </div>
                                                            

                                                            
                                                            <div class="mt-5">
                                                                <small>
                                                                    *Pastikan anda telah mengisi dengan benar sebelum melanjutkan.
                                                                </small>
                                                            </div>
                                                            

                                                            
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
                                                        

                                                        </div>






                                                    </div>
                                                    
                                                    

                                                    
                                                    <div id="step-2" class="">

                                                        <div class="form">

                                                            
                                                            <h2>Izin Kerja Kontraktor</h2>
                                                            

                                                            
                                                            <div class="mt-3">
                                                                <small>Masukkan Nama Kontraktor dan Penanggung Jawab beserta Nomor Telepon yang dapat dihubungi</small>
                                                            </div>
                                                            


                                                            <!-- Nama Kontraktor -->
                                                            <div class="form-group mt-4 kun"
                                                            data-toggle="popover" data-trigger="hover" data-placement="left" data-content="Masukkan Nama Kontraktor">
                                                                <input type="text" name="nama_kontraktor" id="nama_kontraktor" class="form-control input-md"
                                                                data-toggle="popover" data-trigger="focus" data-placement="left" data-content="Masukkan Nama Kontraktor"
                                                                placeholder="Nama Kontraktor" autofocus>
                                                            </div>

                                                            <div class="form-group kun"
                                                            data-toggle="popover" data-trigger="hover" data-placement="left" data-content="Masukkan email Kontraktor">
                                                              <input type="email" class="form-control input-md" id="email_kontraktor" placeholder="Email Kontraktor"
                                                              data-toggle="popover" data-trigger="focus" data-placement="left" data-content="Harap Masukkan email valid dan aktif untuk menerima hasil">
                                                            </div>

                                                            <!-- Penanggung Jawab Kontraktor -->
                                                            <div class="form-group kun"
                                                            data-toggle="popover" data-trigger="hover" data-placement="left" data-content="Masukkan Nama Penanggung Jawab Kontraktor">
                                                                <input type="text" name="pj_kontraktor" id="pj_kontraktor" class="form-control input-md" placeholder="Penanggung Jawab Kontraktor"
                                                                data-toggle="popover" data-trigger="focus" data-placement="left" data-content="Masukkan Nama Penanggung Jawab Kontraktor">
                                                            </div>

                                                            <!-- No. Telp. Penanggung Jawab Kontraktor -->
                                                            <div class="form-group kun"
                                                            data-toggle="popover" data-trigger="hover" data-placement="left" data-content="Masukkan Nomor Telepon Penanggung Jawab Kontraktor yang dapat dihubungi">
                                                                <input type="tel" name="telp_pj_kontraktor" id="telp_pj_kontraktor" class="form-control input-md" placeholder="No. Telp. Penanggung Jawab Kontraktor"
                                                                data-toggle="popover" data-trigger="focus" data-placement="left" data-content="Masukkan Nomor Telepon Penanggung Jawab Kontraktor yang dapat dihubungi">
                                                            </div>

                                                            <!-- Penanggung Jawab Lapangan -->
                                                            <div class="form-group kun"
                                                            data-toggle="popover" data-trigger="hover" data-placement="left" data-content="Masukkan Nama Penanggung Jawab Lapangan">
                                                                <input type="text" name="pj_lapangan" id="pj_lapangan" class="form-control input-md" placeholder="Penanggung Jawab Lapangan"
                                                                data-toggle="popover" data-trigger="focus" data-placement="left" data-content="Masukkan Nama Penanggung Jawab Lapangan">
                                                            </div>

                                                            <!-- No. Telp. Penanggung Jawab Lapangan -->
                                                            <div class="form-group kun"
                                                            data-toggle="popover" data-trigger="hover" data-placement="left" data-content="Masukkan Nomor Telepon Penanggung Jawab Lapangan yang dapat dihubungi">
                                                                <input type="tel" name="telp_pj_lapangan" id="telp_pj_lapangan" class="form-control input-md" placeholder="No. Telp Penanggung Jawab Lapangan"
                                                                data-toggle="popover" data-trigger="focus" data-placement="left" data-content="Masukkan Nomor Telepon Penanggung Jawab Lapangan yang dapat dihubungi">
                                                            </div>

                                                            
                                                            <div class="mt-5">
                                                                <small>
                                                                    *Pastikan anda telah mengisi dengan benar sebelum melanjutkan.
                                                                </small>
                                                            </div>
                                                            
                                                            
                                                            <div class="row">
                                                                <div class="col"><hr></div>
                                                                <div class="col-2 text-center">
                                                                    <small>IKO</small>
                                                                </div>
                                                                <div class="col"><hr></div>
                                                            </div>
                                                            

                                                        </div>



                                                    </div>
                                                    

                                                    
                                                    <div id="step-3" class="">

                                                        <div class="form">

                                                            
                                                            <h2>Izin Kerja Kontraktor</h2>
                                                            

                                                            
                                                            <div class="mt-3">
                                                                <small>
                                                                    Masukkan Nama Penanggung Jawab Project beserta No. Telp. yang dapat dihubungi
                                                                </small>
                                                            </div>
                                                            

                                                            
                                                            <div class="form-group kun mt-4"
                                                            data-toggle="popover" data-trigger="hover" data-placement="left" data-content="Masukkan Nama Pemilik/Penanggung Jawab Project">
                                                                <input type="text" name="pj_project" id="pj_project" class="form-control" placeholder="Penanggung Jawab Project"
                                                                data-toggle="popover" data-trigger="focus" data-placement="left" data-content="Masukkan Nama Pemilik/Penanggung Jawab Project">
                                                            </div>
                                                            

                                                            
                                                            <div class="form-group kun"
                                                            data-toggle="popover" data-trigger="hover" data-placement="left" data-content="Masukkan Nomor Telepon Pemilik/Penanggung Jawab Project yang dapat dihubungi">
                                                                <input type="tel" name="telp_pj_project" id="telp_pj_project" class="form-control" placeholder="No. Telp."
                                                                data-toggle="popover" data-trigger="focus" data-placement="left" data-content="Masukkan Nomor Telepon Pemilik/Penanggung Jawab Project yang dapat dihubungi">
                                                            </div>
                                                            

                                                            
                                                            <div class="mt-5">
                                                                <small>
                                                                    *Pastikan anda telah mengisi dengan benar sebelum melanjutkan
                                                                </small>
                                                            </div>
                                                            

                                                            
                                                            <div class="row">
                                                                <div class="col"><hr></div>
                                                                <div class="col-2 text-center">
                                                                    <small>IKO</small>
                                                                </div>
                                                                <div class="col"><hr></div>
                                                            </div>
                                                            

                                                        </div>

                                                    </div>
                                                    

                                                    
                                                    <div id="step-4" class="">

                                                        <div class="form">

                                                            
                                                            <h2>Izin Kerja Kontraktor</h2>
                                                            

                                                            
                                                            <div class="mt-3"><small>Silahkan Pilih Lokasi Pelaksanaan Project</small></div>
                                                            

                                                            
                                                            <div data-toggle="popover" data-trigger="hover" data-placement="left" data-content="Pilih Lokasi Pekerjaan">
                                                              
                                                              <div class="form-group kun mt-4 mb-1">
                                                                <input type="radio" name="lokasi" id="ciawi" value="Ciawi">
                                                                <label for="ciawi">Ciawi</label>
                                                              </div>
                                                              

                                                              <div class="form-group kun">
                                                                <input type="radio" name="lokasi" id="cibitung" value="Cibitung">
                                                                <label for="cibitung">Cibitung</label>
                                                              </div>
                                                            
                                                            </div>

                                                            
                                                            <div class="mt-5">
                                                                <small>*Pastikan anda telah memilih lokasi yang benar sebelum melanjutkan</small>
                                                            </div>
                                                            

                                                            
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
                                                    

                                                    
                                                    <div id="step-5" class="">

                                                        <div class="form">

                                                            
                                                            <h2>Izin Kerja Kontraktor</h2>
                                                            

                                                            
                                                            <div class="mt-3">
                                                                <small>
                                                                    Masukkan Deskripsi Project dan Lokasi Area Pengerjaan Project
                                                                </small>
                                                            </div>
                                                            

                                                            
                                                            <div class="form-group mt-3 kun"
                                                            data-toggle="popover" data-trigger="hover" data-placement="left" data-content="Masukkan Deskripsi Project/Maintenance yang akan dikerjakan">
                                                                <textarea name="deskripsi" id="desc_project" class="form-control input-md"  rows="10" placeholder="Deskripsi Project"
                                                                data-toggle="popover" data-trigger="focus" data-placement="left" data-content="Masukkan Deskripsi Project/Maintenance yang akan dikerjakan"></textarea>
                                                            </div>
                                                            

                                                            
                                                            <div class="form-group kun"
                                                            data-toggle="popover" data-trigger="hover" data-placement="left" data-content="Masukkan Lokasi/Area Pekerjaan">
                                                                <input type="text" name="area" id="lokasi_project" placeholder="Area Project" class="form-control inpput-md"
                                                                data-toggle="popover" data-trigger="focus" data-placement="left" data-content="Masukkan Lokasi/Area Pekerjaan">
                                                            </div>
                                                            


                                                            
                                                            <div class="mt-5">
                                                                <small>
                                                                    *Pastikan anda telah mengisi dengan benar sebelum melanjutkan.
                                                                </small>
                                                            </div>
                                                            


                                                            
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
                                                            

                                                        </div>

                                                    </div>
                                                    

                                                    
                                                    <div id="step-6" class="">

                                                        <div class="form">

                                                            
                                                            <h2>Izin Kerja Kontraktor</h2>
                                                            

                                                            
                                                            <div class="mt-3">
                                                                <small>
                                                                    Silahkan Pilih jenis Area dan Masukkan nama barang dan peralatan yang akan disimpan beserta lokasi gudang.
                                                                </small>
                                                            </div>
                                                            

                                                            
                                                            <div class="form-group kun mt-3">
                                                                <input type="checkbox" name="area_gmp" id="area_gmp" value="Ya">
                                                                <label for="area_gmp"
                                                                data-toggle="popover" data-trigger="hover" data-placement="left" data-content="Check Option jika Bekerja pada Area GMP (Abaikan jika tidak)">Bekerja Pada Area GMP</label>
                                                                <br>
                                                                <small>*Jangan dicheck/Abaikan jika tidak bekerja pada area GMP (Good Manufacturing Practice)</small>
                                                            </div>
                                                            

                                                            
                                                            <div class="form-group" id="gmp"
                                                            data-toggle="popover" data-trigger="hover" data-placement="left" data-content="Masukkan Alat dan Barang yang akan disimpan, tekan[+] untuk menambah field, [-] untuk menghapus field">

                                                                <div class="input-group mb-2 kun" id="gmp_template">
                                                                    <input type="text" name="brg_yang_disimpan[]" id="barang" class="form-control" placeholder="Alat dan Barang yang disimpan">
                                                                    <div class="input-group-append">
                                                                        <button class="btn btn-danger" id="gmp_remove_current"><span class="fa fa-minus"></span></button>
                                                                        <button class="btn btn-success" id="gmp_add"><span class="fa fa-plus"></span></button>
                                                                    </div>
                                                                </div>


                                                                <div id="gmp_noforms_template"></div>

                                                            </div>

                                                            

                                                            
                                                            <div class="form-group kun"
                                                            data-toggle="popover" data-trigger="hover" data-placement="left" data-content="Masukkan Lokasi Gudang Penyimpanan Alat dan Barang">
                                                                <input type="text" name="lokasi_gudang" id="lokasi_gudang" class="form-control" placeholder="Lokasi Gudang Penyimpanan"
                                                                data-toggle="popover" data-trigger="focus" data-placement="left" data-content="Masukkan Lokasi Gudang Penyimpanan Alat dan Barang">
                                                            </div>
                                                            

                                                            
                                                            <div class="mt-5">
                                                                <small>*Pastikan anda telah mengisi dengan benar sebelum melanjutkan</small>
                                                            </div>
                                                            

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
                                                    

                                                    
                                                    <div id="step-7" class="">

                                                        <div class="form">

                                                        
                                                        <h2>Izin Kerja Kontraktor</h2>
                                                        

                                                        
                                                        <div class="mt-3"><small>Silahkan masukkan catatan project.</small></div>
                                                        

                                                        
                                                        <div class="form-group">
                                                            <div class="mt-4 mb-2">
                                                                Pekerjaan Berbahaya
                                                            </div>
                                                            <div data-toggle="popover" data-trigger="hover" data-placement="left" data-content="Pilih Jenis Pekerjaan Berbahaya(Abaikan jika tidak termasuk Pekerjaan Berbahaya)">

                                                            <div id="check-ipb">
                                                              
                                                              <div class="mt-1 kun">
                                                                <input type="checkbox" name="pekerjaan_berbahaya[]" id="api" value="Api">
                                                                <label for="api">Api / Kebakaran</label>
                                                              </div>
                                                              
                                                              
                                                              <div class="kun">
                                                                <input type="checkbox" name="pekerjaan_berbahaya[]" id="ketinggian" value="Ketinggian">
                                                                <label for="ketinggian">Ketinggian >2 m</label>
                                                              </div>
                                                              
                                                              
                                                              <div class="kun">
                                                                <input type="checkbox" name="pekerjaan_berbahaya[]" id="ruang_terbatas" value="Ruang Terbatas">
                                                                <label for="ruang_terbatas">Ruang Terbatas</label>
                                                              </div>
                                                              
                                                            </div>
                                                            <div id="check-kimia">
                                                              
                                                              <div class="kun">
                                                                <input type="checkbox" name="pekerjaan_berbahaya[]" id="kimia" value="Bahan Kimia Berbahaya">
                                                                <label for="kimia">Bahan kimia Berbahaya</label>
                                                              </div>
                                                              
                                                            </div>
                                                          </div>
                                                        </div>
                                                        

                                                        
                                                        <div class="form-group"
                                                        data-toggle="popover" data-trigger="hover" data-placement="left" data-content="Abaikan Option ini">
                                                            <div class="mt-4 mb-2">
                                                                Dokumen Lampiran yang dibutuhkan
                                                            </div>
                                                            
                                                            <div class="kun">
                                                                <input type="checkbox" name="doc_lampiran[]" id="ipb" value="IPB">
                                                                <label>IPB</label>
                                                            </div>
                                                            
                                                            
                                                            <div class="kun">
                                                                <input type="checkbox" name="doc_lampiran[]" id="msds" value="MSDS">
                                                                <label>MSDS</label>
                                                            </div>
                                                            
                                                            
                                                            <div class="kun">
                                                                <input type="checkbox" name="doc_lampiran[]" id="so" value="SO" checked>
                                                                <label>Struktur Organisasi</label>
                                                            </div>
                                                            
                                                        </div>
                                                        

                                                        
                                                        <div class="form-group">
                                                            <div class="mt-4 mb-2">
                                                                Kebutuhan Utility dan lainnya
                                                            </div>
                                                            <div class="row kun"
                                                            data-toggle="popover" data-trigger="hover" data-placement="left" data-content="Check Option jika memerlukan Kebutuhan utility berupa Air (Harap Catat Nama, Departement, Email, dan Nomor Telepon Penanggung Jawab)">
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
                                                            <div class="row kun"
                                                            data-toggle="popover" data-trigger="hover" data-placement="left" data-content="Check Option jika memerlukan Kebutuhan utility berupa Angin (Harap Catat Nama, Departement, Email, dan Nomor Telepon Penanggung Jawab)">
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
                                                            <div class="row kun"
                                                            data-toggle="popover" data-trigger="hover" data-placement="left" data-content="Check Option jika memerlukan Kebutuhan utility berupa Listrik (Harap Catat Nama, Departement, Email, dan Nomor Telepon Penanggung Jawab)">
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
                                                            <div class="row kun"
                                                            data-toggle="popover" data-trigger="hover" data-placement="left" data-content="Check Option jika memerlukan Kebutuhan utility berupa Steam/Uap (Harap Catat Nama, Departement, Email, dan Nomor Telepon Penanggung Jawab)">
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
                                                        

                                                        
                                                        <div class="form-group"
                                                        data-toggle="popover" data-trigger="hover" data-placement="left" data-content="Pilih Jenis Sistem yang akan terganggu, pilih lainnya jika tidak tercantum">
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

                                                                
                                                                <div class="input-group mb-2 kun" id="lain_template">
                                                                    <input type="text" name="terganggu[]" id="lain_text" class="form-control" placeholder="Sistem Lainnya">
                                                                    <div class="input-group-append">
                                                                        <button class="btn btn-danger" id="lain_remove_current"><span class="fa fa-minus"></span></button>
                                                                        <button class="btn btn-success" id="lain_add"><span class="fa fa-plus"></span></button>
                                                                    </div>
                                                                </div>
                                                                

                                                                
                                                                <div id="lain_noforms_template"></div>
                                                                

                                                            </div>
                                                        </div>
                                                        

                                                        

                                                                <small>
                                                                    *Pastikan anda telah mengisi dengan benar sebelum melanjutkan.
                                                                </small>

                                                            


                                                            
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
                                                            

                                                        </div>

                                                    </div>
                                                    

                                                    
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
                                                                

                                                        </div>

                                                    </div>
                                                    

                                                </div>

                                            </div>

                                        </div>
                                            <input type="hidden" name="status" value="Pending">
                                            <input type="submit" value="Submit" class="btn btn-primary sw-btn-finish float-right col-lg-2" id="submit">
                                            <?php echo e(csrf_field()); ?>

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



<script src="/js/jquery.sheepItPlugin.js"></script>

<script src="/js/jquery-ui.js"></script>

<script src="/js/jquery.smartWizard.js"></script>
<script>

    $(document).ready(function () {

      // popovers Initialization
      $('[data-toggle="popover"]').popover();

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
              $('#pj_air').val('<?php echo e($air->name); ?>');
              $('#dept_pj_air').val('<?php echo e($air->departement); ?>');
              $('#email_pj_air').val('<?php echo e($air->email); ?>');
              $('#telp_pj_air').val('<?php echo e($air->telp); ?>');
            } else {
                $('#pj_air').val('Penanggung Jawab Utility');
                $('#dept_pj_air').val('dept');
                $('#email_pj_air').val('Email Penanggung Jawab');
                $('#telp_pj_air').val('Telp');
            }
        });

        $('#angin').click(function () {
            if($('#angin').is(':checked')) {
              $('#pj_angin').val('<?php echo e($angin->name); ?>');
              $('#dept_pj_angin').val('<?php echo e($angin->departement); ?>');
              $('#email_pj_angin').val('<?php echo e($angin->email); ?>');
              $('#telp_pj_angin').val('<?php echo e($angin->telp); ?>');
            } else {
              $('#pj_angin').val('Penanggung Jawab Utility');
              $('#dept_pj_angin').val('dept');
              $('#email_pj_angin').val('Email Penanggung Jawab');
              $('#telp_pj_angin').val('Telp');
            }
        });

        $('#listrik').click(function () {
            if($('#listrik').is(':checked')) {
              $('#pj_listrik').val('<?php echo e($listrik->name); ?>');
              $('#dept_pj_listrik').val('<?php echo e($listrik->departement); ?>');
              $('#email_pj_listrik').val('<?php echo e($listrik->email); ?>');
              $('#telp_pj_listrik').val('<?php echo e($listrik->telp); ?>');
            } else {
              $('#pj_listrik').val('Penanggung Jawab Utility');
              $('#dept_pj_listrik').val('dept');
              $('#email_pj_listrik').val('Email Penanggung Jawab');
              $('#telp_pj_listrik').val('Telp');
            }
        });

        $('#steam').click(function () {
            if($('#steam').is(':checked')) {
              $('#pj_steam').val('<?php echo e($steam->name); ?>');
              $('#dept_pj_steam').val('<?php echo e($steam->departement); ?>');
              $('#email_pj_steam').val('<?php echo e($steam->email); ?>');
              $('#telp_pj_steam').val('<?php echo e($steam->telp); ?>');
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
