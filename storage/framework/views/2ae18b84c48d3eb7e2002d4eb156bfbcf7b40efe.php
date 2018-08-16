<!DOCTYPE html>
<html lang="en">
<head>

    <!-- <meta http-equiv="refresh" content="2" > -->
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/font-awesome.css">
    <link rel="stylesheet" href="/css/master.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HSE - Analisa Dampak Lingkungan</title>
    
    
</head>

<body class="adl">

<form action="/ADL" method="post">

    <div class="d-none d-sm-block">
        <div class="adlback">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                            <div class="jsabox">
                                    <div class="hijau"></div>
                                    <div class="form">
                                        <center><h2>Analisa Dampak Lingkungan</h2></center>
                                            <hr>
                                        <div id="ADL">                                
                                            <!-- Form utama ADL -->
                                            <div id="ADL_template">
                                                <table class="table table-borderless text-center col-sm-12">
                                                    <thead class="thead-light">
                                                        <tr> 
                                                            <th class="col-sm-9">Aktivitas</th>
                                                            <th class="col-sm-3">Penanggung Jawab</th>
                                                        </tr>
                                                    </thead>
                                                </table>
                                                <div class="row">
        
                                                    <!-- Nama Aktivitas -->
                                                    <div class="col-sm-9">
                                                        <input type="text" name="aktivitas[]" id="ADL_#index#_nama_aktivitas" class="form-control" placeholder="Contoh: Perbaikan Jalan">
                                                    </div>
                                                    <!-- /Nama Aktivitas -->
                                                
                                                    <!-- Penanggung Jawab -->
                                                    <div class="col-sm-3">
                                                        <input type="text" name="penanggung_jawab[]" id="ADL_#index#_penanggung_jawab" class="form-control" placeholder="Contoh: Alvin Ardiansyah">
                                                    </div>
                                                    <!-- /Penanggung Jawab -->
                                                </div>
                                                <hr>
                                            
                                                <table class="table table-borderless text-center col-sm-12 mt-3">
                                                    <thead class="thead-light">
                                                        <tr> 
                                                            <th class="col-sm-3">Alat dan Bahan</th>
                                                            <th class="col-sm-3">Jenis Pencemaran</th>
                                                            <th class="col-sm-3">Potensi Pencemaran</th>
                                                            <th class="col-sm-3">Pengendalian</th>
                                                        </tr>
                                                    </thead>
                                                </table>
                            
                                                <div class="row mt-2">    
        
                                                    <!-- Alat dan Bahan -->
                                                    <div class="col-sm-3">
                                                        <div id="ADL_#index#_ADB">
        
                                                            <!-- Template Alat dan Bahan (Nesting) -->
                                                            <div id="ADL_#index#_ADB_template">
                                                                <div class="input-group mb-2">
                                                                    <input type="text" name="adb[#index#][]" id="ADL_#index#_ADB_#index_ADB#" class="form-control" placeholder="Contoh: Kabel">
                                                                    <div class="input-group-append">
                                                                        <button class="btn btn-danger" id="ADL_#index#_ADB_remove_current" type="button"><span class="fa fa-minus"></span></button>
                                                                        <button class="btn btn-success" id="ADL_#index#_ADB_add" type="button"><span class="fa fa-plus"></span></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- /Template Alat dan Bahan (Nesting) -->
        
                                                            <!-- No Form template -->
                                                            <div id="ADL_#index#_ADB_noforms_template">Tidak Ada Alat dan Bahan</div>
                                                            <!-- /No form template -->
        
                                                        </div>
                                                    </div>
                                                    <!-- /Alat dan Bahan -->
        
                                                    <div class="col-sm-3">
                                                        <div id="ADL_#index#_jenis_pencemaran">
        
                                                            <div id="ADL_#index#_jenis_pencemaran_template">
                                                                <div class="form-group row ml-2">
                                                                    <div class="jau col-sm-4">
                                                                        <input type="checkbox" name="jenis_pencemaran[#index#][]" id="ADL_#index#_udara" value="Udara">
                                                                        <label for="ADL_#index#_udara">Udara</label>
                                                                    </div>
                                                                    <div class="jau col-sm-4">
                                                                        <input type="checkbox" name="jenis_pencemaran[#index#][]" id="ADL_#index#_tanah" value="Tanah">
                                                                        <label for="ADL_#index#_tanah">Tanah</label>
                                                                    </div>
                                                                    <div class="jau col-sm-4">
                                                                        <input type="checkbox" name="jenis_pencemaran[#index#][]" id="ADL_#index#_air" value="Air">
                                                                        <label for="ADL_#index#_air">Air</label>
                                                                    </div>
                                                                </div>
                                                            </div>
        
                                                        </div>
                                                    </div>
        
                                                    <!-- Potensi Pencemaran -->
                                                    <div class="col-sm-3">
                                                        <div id="ADL_#index#_potensi_pencemaran">
        
                                                            <!-- Template potensi pencemaran -->
                                                            <div id="ADL_#index#_potensi_pencemaran_template">
                                                                <div class="input-group mb-2">
                                                                    <input type="text" name="potensi_pencemaran[#index#][]" id="ADL_#index#_potensi_pencemaran_#index_potensi_pencemaran#" class="form-control" placeholder="Contoh: Serbuk Besi">
                                                                    <div class="input-group-append">
                                                                        <button class="btn btn-danger" id="ADL_#index#_potensi_pencemaran_remove_current" type="button"><span class="fa fa-minus"></span></button>
                                                                        <button class="btn btn-success" id="ADL_#index#_potensi_pencemaran_add" type="button"><span class="fa fa-plus"></span></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- /Template potensi pencemaran -->
        
                                                            <!-- No form template -->
                                                            <div id="ADL_#index#_potensi_pencemaran_noforms_template">Tidak Ada Potensi Pencemaran</div>
                                                            <!-- /No form template -->
        
                                                        </div>
                                                    </div>
                                                    <!-- /Potensi Pencemaran -->
        
                                                    <!-- Pengendalian -->
                                                    <div class="col-sm-3">
                                                        <div id="ADL_#index#_pengendalian">
        
                                                            <!-- Template Pengendalian -->
                                                            <div id="ADL_#index#_pengendalian_template">
                                                                <div class="input-group mb-2">
                                                                    <input type="text" name="pengendalian[#index#][]" id="ADL_#index#_pengendalian_#index_pengendalian#" class="form-control" placeholder="Contoh: Membersihkan sisa Material">
                                                                    <div class="input-group-append">
                                                                        <button class="btn btn-danger" id="ADL_#index#_pengendalian_remove_current" type="button"><span class="fa fa-minus"></span></button>
                                                                        <button class="btn btn-success" id="ADL_#index#_pengendalian_add" type="button"><span class="fa fa-plus"></span></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- /Template Pengendalian -->
        
                                                            <!-- pengendalian no template -->
                                                            <div id="ADL_#index#_pengendalian_noforms_template">Tidak Ada Pengendalian</div>
                                                            <!-- /pengendalian no template -->
        
                                                        </div>
                                                    </div>
                                                    <!-- /Pengendalian -->
                                            
                                                </div>
                                            
                                                    <hr>
        
                                                <!-- Keterangan -->
                                                <div class="row mt-2">
                                                    <div class="col-sm-12">
                                                        <input type="text" name="keterangan[]" id="ADL_#index#_keterangan" class="form-control" placeholder="Keterangan Aktivitas (Jika Ada)">
                                                    </div>
                                                </div>
                                                <!-- /Keterangan -->
        
                                                    <hr>
        
        
        
                                            </div>
                                            <!-- /Form Utama ADL -->
        
                                            <!-- No form template -->
                                            <div id="ADL_noforms_template">Tidak Ada Dampak Lingkungan</div>
                                            <!-- /No form template -->
                                        
                                            
                                            <div class="mt-5">
                                                <small>*pastikan anda telah mengisi dengan benar sebelum melanjutkan</small>
                                            </div>
                                            
        
                                            
                                            <div class="row">
                                                <div class="col">
                                                    <hr>
                                                </div>
                                                <div class="col-sm-1">
                                                    <small>ADL</small>
                                                </div>
                                                <div class="col">
                                                    <hr>
                                                </div>
                                            </div>
                                            
                                        
                                            <!-- Controls -->
                                            <div class="row mt-2">
                                                <div class="col-sm-1">
                                                    <button class="btn btn-success" id="ADL_add"><span class="fa fa-plus"></span> Add</button>
                                                </div>
                                                <div class="col-sm-1">
                                                    <button class="btn btn-danger" id="ADL_remove_last"><span class="fa fa-minus"></span> Remove</button>
                                                </div>
                                                <div class="col-sm-10">
                                                <button class="btn btn-primary float-right" type="submit"><span class="fa fa-check"></span> Submit</button>
                                                    <?php echo e(csrf_field()); ?>

                                                </div>
                                            </div>
                                            <!-- /Controls -->
        
                                        </div>
                                            <hr>
                                    </div>
                                </div> 
                    </div>
                </div>
            </div>    
        </div>
    </div>

<div class="d-block d-lg-none">
    <div class="adlback">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                        <div class="jsabox">
                                <div class="hijau"></div>
                                <div class="form">
                                    <h3>Analisa Dampak Lingkungan</h3>
                                    <small>*Silahkan isi Formulir ADL sebelum melanjutkan</small>
                                        <hr>
                                    <div id="ADL-mobile">                                
                                        <!-- Form utama ADL -->
                                        <div id="ADL-mobile_template">
                                            
                                            
    
                                                <!-- Nama Aktivitas -->
                                                <div class="form-group">
                                                    <input type="text" name="aktivitas[]" id="ADL-mobile_#index#_nama_aktivitas" class="form-control" placeholder="Nama Aktivitas">
                                                </div>
                                                <!-- /Nama Aktivitas -->

                                            
                        
                                                
    
                                                <!-- Alat dan Bahan -->
                                                <div class="form-group">
                                                    <div id="ADL-mobile_#index#_ADB">
    
                                                        <!-- Template Alat dan Bahan (Nesting) -->
                                                        <div id="ADL-mobile_#index#_ADB_template">
                                                            <div class="input-group mb-2">
                                                                <input type="text" name="adb[#index#][]" id="AD-mobileL_#index#_ADB_#index_ADB#" class="form-control" placeholder="Alat dan Bahan">
                                                                <div class="input-group-append">
                                                                    <button class="btn btn-danger" id="ADL-mobile_#index#_ADB_remove_current" type="button"><span class="fa fa-minus"></span></button>
                                                                    <button class="btn btn-success" id="ADL-mobile_#index#_ADB_add" type="button"><span class="fa fa-plus"></span></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /Template Alat dan Bahan (Nesting) -->
    
                                                        <!-- No Form template -->
                                                        <div id="ADL-mobile_#index#_ADB_noforms_template">Tidak Ada Alat dan Bahan</div>
                                                        <!-- /No form template -->
    
                                                    </div>
                                                </div>
                                                <!-- /Alat dan Bahan -->
    
                                                <div class="form-group">
                                                    <div id="ADL-mobile_#index#_jenis_pencemaran">
                                                        <label for="">Jenis Pencemaran</label>
                                                        <div id="ADL-mobile_#index#_jenis_pencemaran_template">
                                                                <div class="jau">
                                                                    <input type="checkbox" name="jenis_pencemaran[#index#][]" id="ADL-mobile_#index#_udara" value="Udara">
                                                                    <label for="ADL-mobile_#index#_udara">Udara</label>
                                                                </div>
                                                                <div class="jau">
                                                                    <input type="checkbox" name="jenis_pencemaran[#index#][]" id="ADL-mobile_#index#_tanah" value="Tanah">
                                                                    <label for="ADL-mobile_#index#_tanah">Tanah</label>
                                                                </div>
                                                                <div class="jau">
                                                                    <input type="checkbox" name="jenis_pencemaran[#index#][]" id="ADL-mobile_#index#_air" value="Air">
                                                                    <label for="ADL-mobile_#index#_air">Air</label>
                                                                </div>
                                                        </div>
    
                                                    </div>
                                                </div>
    
                                                <!-- Potensi Pencemaran -->
                                                <div class="form-group">
                                                    <div id="ADL-mobile_#index#_potensi_pencemaran">
    
                                                        <!-- Template potensi pencemaran -->
                                                        <div id="ADL-mobile_#index#_potensi_pencemaran_template">
                                                            <div class="input-group mb-2">
                                                                <input type="text" name="potensi_pencemaran[#index#][]" id="ADL-mobile_#index#_potensi_pencemaran_#index_potensi_pencemaran#" class="form-control" placeholder="Potensi Pencemaran">
                                                                <div class="input-group-append">
                                                                    <button class="btn btn-danger" id="ADL-mobile_#index#_potensi_pencemaran_remove_current" type="button"><span class="fa fa-minus"></span></button>
                                                                    <button class="btn btn-success" id="ADL-mobile_#index#_potensi_pencemaran_add" type="button"><span class="fa fa-plus"></span></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /Template potensi pencemaran -->
    
                                                        <!-- No form template -->
                                                        <div id="ADL-mobile_#index#_potensi_pencemaran_noforms_template">Tidak Ada Potensi Pencemaran</div>
                                                        <!-- /No form template -->
    
                                                    </div>
                                                </div>
                                                <!-- /Potensi Pencemaran -->
    
                                                <!-- Pengendalian -->
                                                <div class="form-group">
                                                    <div id="ADL-mobile_#index#_pengendalian">
    
                                                        <!-- Template Pengendalian -->
                                                        <div id="ADL-mobile_#index#_pengendalian_template">
                                                            <div class="input-group mb-2">
                                                                <input type="text" name="pengendalian[#index#][]" id="ADL-mobile_#index#_pengendalian_#index_pengendalian#" class="form-control" placeholder="Pengendalian Pencemaran">
                                                                <div class="input-group-append">
                                                                    <button class="btn btn-danger" id="ADL-mobile_#index#_pengendalian_remove_current" type="button"><span class="fa fa-minus"></span></button>
                                                                    <button class="btn btn-success" id="ADL-mobile_#index#_pengendalian_add" type="button"><span class="fa fa-plus"></span></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /Template Pengendalian -->
    
                                                        <!-- pengendalian no template -->
                                                        <div id="ADL-mobile_#index#_pengendalian_noforms_template">Tidak Ada Pengendalian</div>
                                                        <!-- /pengendalian no template -->
    
                                                    </div>
                                                </div>
                                                <!-- /Pengendalian -->
                                        
                                            
                                        
                                                <hr>

                                                                                            
                                                <!-- Penanggung Jawab -->
                                                <div class="form-group">
                                                    <input type="text" name="penanggung_jawab[]" id="ADL-mobile_#index#_penanggung_jawab" class="form-control" placeholder="Penanggung Jawab">
                                                </div>
                                                <!-- /Penanggung Jawab -->
    
                                                <!-- Keterangan -->
                                                <div class="form-group">
                                                    <input type="text" name="keterangan[]" id="ADL-mobile_#index#_keterangan" class="form-control" placeholder="Keterangan Aktivitas (Jika Ada)">
                                                </div>
                                                <!-- /Keterangan -->
    
                                                <hr>
    
    
    
                                        </div>
                                        <!-- /Form Utama ADL -->
    
                                        <!-- No form template -->
                                        <div id="ADL-mobile_noforms_template">Tidak Ada Dampak Lingkungan</div>
                                        <!-- /No form template -->
                                    
                                        
                                        <div class="mt-5">
                                            <small>*pastikan anda telah mengisi dengan benar sebelum menambah atau melanjutkan</small>
                                        </div>
                                        
    
                                        
                                        <div class="row">
                                            <div class="col">
                                                <hr>
                                            </div>
                                            <div class="col-2 text-center">
                                                <small>ADL</small>
                                            </div>
                                            <div class="col">
                                                <hr>
                                            </div>
                                        </div>
                                        
                                    
                                        <!-- Controls -->
                                        <div class="row mt-2">
                                            <div class="col-3">
                                                <button class="btn btn-success pull-left" id="ADL-mobile_add"><span class="fa fa-plus"></span> Add</button>
                                            </div>
                                            <div class="col-5">
                                                <button class="btn btn-danger" id="ADL-mobile_remove_last"><span class="fa fa-minus"></span> Remove</button>
                                            </div>
                                            <div class="col-4">
                                                <input type="hidden" name="status" value="Pending">
                                            <button class="btn btn-primary pull-right" type="submit"><span class="fa fa-check"></span> Submit</button>
                                                <?php echo e(csrf_field()); ?>

                                            </div>
                                        </div>
                                        <!-- /Controls -->
    
                                    </div>
                                        <hr>
                                </div>
                            </div> 
                </div>
            </div>
        </div>
    </div>
</div>

</form>

<script type="text/javascript" src="<?php echo e(URL::asset('js/jquery.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(URL::asset('js/jquery.sheepItPlugin.js')); ?>"></script>
<script>
var id = 0;

var sheepItForm = {};

    $(document).ready(function () {

        var sheepItForm = $('#ADL').sheepIt({
            separator: '',
            allowRemoveCurrent: true,
            allowAdd: true,
            minFormsCount: 1,
            iniFormsCount: 1,

            nestedForms: [
                {
                    id: 'ADL_#index#_ADB',
                    options: {
                        separator: '',
                        indexFormat: '#index_ADB#',
                        allowRemoveCurrent: true,
                        allowAdd: true,
                        minFormsCount: 1,
                        iniFormsCount: 1
                    }
                },
                {
                    id: 'ADL_#index#_potensi_pencemaran',
                    options: {
                        separator: '',
                        indexFormat: '#index_potensi_pencemaran#',
                        allowRemoveCurrent: true,
                        allowAdd: true,
                        minFormsCount: 1,
                        iniFormsCount: 1
                    }
                },
                {
                    id: 'ADL_#index#_pengendalian',
                    options: {
                        separator: '',
                        indexFormat: '#index_pengendalian#',
                        allowRemoveCurrent: true,
                        allowAdd: true,
                        minFormsCount: 1,
                        iniFormsCount: 1
                    }
                }
                
            ]
            
        });

        var sheepItForm = $('#ADL-mobile').sheepIt({
            separator: '',
            allowRemoveCurrent: true,
            allowAdd: true,
            minFormsCount: 1,
            iniFormsCount: 1,

            nestedForms: [
                {
                    id: 'ADL-mobile_#index#_ADB',
                    options: {
                        separator: '',
                        indexFormat: '#index_ADB#',
                        allowRemoveCurrent: true,
                        allowAdd: true,
                        minFormsCount: 1,
                        iniFormsCount: 1
                    }
                },
                {
                    id: 'ADL-mobile_#index#_potensi_pencemaran',
                    options: {
                        separator: '',
                        indexFormat: '#index_potensi_pencemaran#',
                        allowRemoveCurrent: true,
                        allowAdd: true,
                        minFormsCount: 1,
                        iniFormsCount: 1
                    }
                },
                {
                    id: 'ADL-mobile_#index#_pengendalian',
                    options: {
                        separator: '',
                        indexFormat: '#index_pengendalian#',
                        allowRemoveCurrent: true,
                        allowAdd: true,
                        minFormsCount: 1,
                        iniFormsCount: 1
                    }
                }
                
            ]
            
        });

    });
</script>
</body>

</html>