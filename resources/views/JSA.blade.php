<!DOCTYPE html>
<html lang="en">
<head>

    <!-- <meta http-equiv="refresh" content="10" > -->
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/font-awesome.css">
    <link rel="stylesheet" href="/css/master.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HSE - @yield('title')</title>


</head>


<body class="jsa">

<form action="/JSA" method="post">
    <div class="d-none d-sm-block">
            <div class="col-sm-12 jsaback">
                    {{-- Desktop  Container --}}
                    <div class="container">
                            <div class="row">

                                    <div class="col-sm-12">
                                            <div class="jsabox">
                                                    <div class="biru"></div>
                                                    <div class="form">

                                                            <center><h2>Job Safety Analysis</h2></center>
                                                            <hr>

                                                            <table class="table table-bordered text-center col-sm-12">
                                                                <thead class="thead-dark">
                                                                    <tr>
                                                                        <th class="col-sm-3">Aktivitas</th>
                                                                        <th class="col-sm-3">Potensi Bahaya</th>
                                                                        <th class="col-sm-3">Pengendalian Bahaya</th>
                                                                        <th class="col-sm-3">Penanggung Jawab</th>
                                                                    </tr>
                                                                </thead>
                                                            </table>
                                                            <!-- JSA Form -->
                                                            <div id="JSA">

                                                                <!-- Form template -->
                                                                <div id="JSA_template">

                                                                    <div class="row mt-3">

                                                                        <!-- Bagian Aktivitas -->
                                                                        <div class="col-sm-3">
                                                                            <input type="text" name="aktivitas[]" id="JSA_#index#_aktivitas" class="form-control" placeholder="Contoh: Perbaikan Jalan">
                                                                        </div>
                                                                        <!-- /Bagian Aktivitas -->

                                                                        <!-- Bagian Potensi Bahaya -->
                                                                        <div class="col-sm-3">
                                                                            <div id="JSA_#index#_potensi_bahaya">

                                                                                <!-- Nested template form -->
                                                                                <div id="JSA_#index#_potensi_bahaya_template">
                                                                                    <div class="input-group mb-2">
                                                                                        <input type="text" name="potensi_bahaya[#index#][]" id="JSA_#index#_potensi_bahaya_#index_potensi#_potensi" class="form-control" placeholder="Contoh: Palu">
                                                                                        <div class="input-group-append">
                                                                                            <button class="btn btn-danger" id="JSA_#index#_potensi_bahaya_remove_current"><span class="fa fa-minus"></span></button>
                                                                                            <button class="btn btn-success" id="JSA_#index#_potensi_bahaya_add"><span class="fa fa-plus"></span></button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- /Nested template form -->

                                                                                <!-- No forms template -->
                                                                                <div id="JSA_#index#_potensi_bahaya_noforms_template">Tidak Ada Potensi</div>
                                                                                <!-- /No forms template -->

                                                                            </div>
                                                                        </div>
                                                                        <!-- /Bagian Potensi Bahaya -->

                                                                    <!-- Bagian Pengendalian Bahaya -->
                                                                    <div class="col-sm-3">
                                                                        <div id="JSA_#index#_pengendalian_bahaya">

                                                                            <!-- Nested template form -->
                                                                            <div id="JSA_#index#_pengendalian_bahaya_template">
                                                                                <div class="input-group mb-2">
                                                                                    <input type="text" name="pengendalian_bahaya[#index#][]" id="JSA_#index#_pengendalian_bahaya_#index_pengendalian#_pengendalian" class="form-control" placeholder="Contoh: Helm">
                                                                                    <div class="input-group-append">
                                                                                        <button class="btn btn-danger" id="JSA_#index#_pengendalian_bahaya_remove_current"><span class="fa fa-minus"></span></button>
                                                                                        <button class="btn btn-success" id="JSA_#index#_pengendalian_bahaya_add"><span class="fa fa-plus"></span></button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- /Nested template form -->

                                                                            <!-- No form template -->
                                                                            <div id="JSA_#index#_pengendalian_bahaya_noforms_template">Tidak Ada Pengendalian</div>
                                                                            <!-- /No form template -->

                                                                        </div>
                                                                    </div>
                                                                    <!-- /Bagian Pengendalian Bahaya -->

                                                                    <!-- Bagian Penanggung Jawab -->
                                                                    <div class="col-sm-3">
                                                                        <input type="text" name="penanggung_jawab[]" id="JSA_#index#_penanggung_jawab" class="form-control" placeholder="Contoh : Alvin Ardiansyah">
                                                                    </div>
                                                                    <!-- /Bagian Penanggung Jawab -->

                                                            </div>
                                                            {{-- /.JSA --}}

                                                            <!-- Legend -->
                                                            <div class="row">
                                                            <div class="col-sm-12">
                                                                <small><kbd>Click <span class="fa fa-plus"></span> to Add Column</kbd></small>
                                                            </div>
                                                            </div>
                                                            <div class="row mb-2">
                                                            <div class="col-sm-12">
                                                                <small><kbd>Click <span class="fa fa-minus"></span> to Remove Column</kbd></small>
                                                            </div>
                                                            </div>
                                                            <!-- /Legend -->

                                                            <!-- Bagian Keterangan -->
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <input type="text" name="keterangan[]" id="JSA_#index#_keterangan" class="form-control" placeholder="Keterangan Aktivitas (Jika Ada)">
                                                                </div>
                                                            </div>
                                                            <!-- /Bagian Keterangan -->

                                                        </div>
                                                        <!-- /Form template -->

                                                        <!-- No form template -->
                                                        <div id="JSA_noforms_template" class="col-sm-3">No Activity</div>
                                                        <!-- /No form template -->

                                                        <!-- Controls -->
                                                        <div class="row mt-2">
                                                            <div class="col-sm-1">
                                                                <button class="btn btn-success" id="JSA_add"><span class="fa fa-plus"> Add</span></button>
                                                            </div>
                                                            <div class="col-sm-1">
                                                                <button class="btn btn-danger" id="JSA_remove_last"><span class="fa fa-minus"> Remove</span></button>
                                                            </div>
                                                            <div class="col-sm-10">
                                                                <button class="btn btn-primary float-right" type="submit"><span class="fa fa-check"> Submit</span></button>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <small>*Pastikan anda telah mengisi Potensi Bahaya dan Pengendalian dengan tepat sebelum menambah Form Aktivitas</small>
                                                            </div>
                                                        </div>
                                                        <!-- /Controls -->
                                                        <hr>

                                                    </div>
                                            </div>
                                    </div>
                            </div>
                    </div>
            </div>
        </div>
    </div>


    {{-- Mobile --}}
    <div class="d-block d-lg-none">
        <div class="jsaback">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="jsabox">
                            <div class="biru"></div>
                            <div class="form">

                                    <h3>Job Safety Analysis</h3>
                                    <small>*silahkan isi Form JSA sebelum Melanjutkan</small>
                                    <hr>

                                    <form action="/JSA" method="post">
                                    <!-- JSA Form -->
                                    <div id="JSA-mobile">

                                        <!-- Form template -->
                                        <div id="JSA-mobile_template">


                                                <!-- Bagian Aktivitas -->
                                                <div class="form-group">
                                                    <input type="text" name="aktivitas[]" id="JSA-mobile_#index#_aktivitas" class="form-control" placeholder="Nama Aktivitas">
                                                </div>
                                                <!-- /Bagian Aktivitas -->

                                                <!-- Bagian Potensi Bahaya -->
                                                <div class="form-group">
                                                    <div id="JSA-mobile_#index#_potensi_bahaya">

                                                        <!-- Nested template form -->
                                                        <div id="JSA-mobile_#index#_potensi_bahaya_template">
                                                            <div class="input-group mb-2">
                                                                <input type="text" name="potensi_bahaya[#index#][]" id="JSA-mobile_#index#_potensi_bahaya_#index_potensi#_potensi" class="form-control" placeholder="Potensi Bahaya">
                                                                <div class="input-group-append">
                                                                    <button class="btn btn-danger" id="JSA-mobile_#index#_potensi_bahaya_remove_current"><span class="fa fa-minus"></span></button>
                                                                    <button class="btn btn-success" id="JSA-mobile_#index#_potensi_bahaya_add"><span class="fa fa-plus"></span></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /Nested template form -->

                                                        <!-- No forms template -->
                                                        <div id="JSA-mobile_#index#_potensi_bahaya_noforms_template">Tidak Ada Potensi</div>
                                                        <!-- /No forms template -->

                                                    </div>
                                                </div>
                                                <!-- /Bagian Potensi Bahaya -->

                                                <!-- Bagian Pengendalian Bahaya -->
                                                <div class="form-group">
                                                    <div id="JSA-mobile_#index#_pengendalian_bahaya">

                                                        <!-- Nested template form -->
                                                        <div id="JSA-mobile_#index#_pengendalian_bahaya_template">
                                                            <div class="input-group mb-2">
                                                                <input type="text" name="pengendalian_bahaya[#index#][]" id="JSA-mobile_#index#_pengendalian_bahaya_#index_pengendalian#_pengendalian" class="form-control" placeholder="Pengendalian Bahaya">
                                                                <div class="input-group-append">
                                                                    <button class="btn btn-danger" id="JSA-mobile_#index#_pengendalian_bahaya_remove_current"><span class="fa fa-minus"></span></button>
                                                                    <button class="btn btn-success" id="JSA-mobile_#index#_pengendalian_bahaya_add"><span class="fa fa-plus"></span></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /Nested template form -->

                                                        <!-- No form template -->
                                                        <div id="JSA-mobile_#index#_pengendalian_bahaya_noforms_template">Tidak Ada Pengendalian</div>
                                                        <!-- /No form template -->

                                                    </div>
                                                </div>
                                                <!-- /Bagian Pengendalian Bahaya -->

                                                <!-- Bagian Penanggung Jawab -->
                                                <div class="form-group">
                                                    <input type="text" name="penanggung_jawab[]" id="JSA-mobile_#index#_penanggung_jawab" class="form-control" placeholder="Penanggung Jawab Aktivitas">
                                                </div>
                                                <!-- /Bagian Penanggung Jawab -->

                                    {{-- /.JSA --}}


                                    <!-- Bagian Keterangan -->
                                        <div class="form-group">
                                            <input type="text" name="keterangan[]" id="JSA-mobile_#index#_keterangan" class="form-control" placeholder="Keterangan Aktivitas (Jika Ada)">
                                        </div>
                                    <!-- /Bagian Keterangan -->

                                    <!-- Legend -->
                                    <div class="row">
                                    <div class="col-12">
                                        <small><kbd>Click <span class="fa fa-plus"></span> to Add Column</kbd></small>
                                    </div>
                                    </div>
                                    <div class="row mb-2">
                                    <div class="col-12">
                                        <small><kbd>Click <span class="fa fa-minus"></span> to Remove Column</kbd></small>
                                    </div>
                                    </div>
                                    <!-- /Legend -->

                                </div>
                                <!-- /Form template -->

                                <!-- No form template -->
                                <div id="JSA-mobile_noforms_template" class="col-sm-3">No Activity</div>
                                <!-- /No form template -->
                                <div class="row">
                                    <div class="col-12">
                                        <small>*Pastikan anda telah mengisi Potensi Bahaya dan Pengendalian dengan tepat sebelum menambah Form Aktivitas</small>
                                    </div>
                                </div>
                                <!-- Controls -->
                                <div class="row">
                                    <div class="col-3">
                                        <button class="btn btn-success pull-left" id="JSA-mobile_add"><span class="fa fa-plus"> Add</span></button>
                                    </div>
                                    <div class="col-5">
                                        <button class="btn btn-danger" id="JSA-mobile_remove_last"><span class="fa fa-minus"> Remove</span></button>
                                    </div>
                                    <div class="col-4">
                                        <input type="hidden" name="status" value="Pending">
                                        <button class="btn btn-primary pull-right" type="submit"><span class="fa fa-check"> Submit</span></button>
                                    </div>
                                </div>




                                <!-- /Controls -->
                                <hr>

                            </div>
                        </div>
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

    {{ csrf_field() }}
</form>

<script type="text/javascript" src="/js/jquery.js"></script>
<script type="text/javascript" src="/js/jquery.sheepItPlugin.js"></script>
<script>
var id = 0;

var sheepItForm = {};

    $(document).ready(function () {

        var sheepItForm = $('#JSA').sheepIt({
            separator: '',
            allowRemoveCurrent: true,
            allowAdd: true,
            minFormsCount: 1,
            iniFormsCount: 1,
            maxFormsCount: 10,

            nestedForms: [
                {
                    id: 'JSA_#index#_potensi_bahaya',
                    options: {
                        separator: '',
                        indexFormat: '#index_potensi#',
                        allowRemoveCurrent: true,
                        allowAdd: true,
                        minFormsCount: 1,
                        iniFormsCount: 1,
                        maxFormsCount: 10
                    }
                },
                {
                    id: 'JSA_#index#_pengendalian_bahaya',
                    options: {
                        separator: '',
                        indexFormat: '#index_pengendalian#',
                        allowRemoveCurrent: true,
                        allowAdd: true,
                        minFormsCount: 1,
                        iniFormsCount: 1,
                        maxFormsCount: 10
                    }
                }

            ]

        });

        var sheepItForm = $('#JSA-mobile').sheepIt({
            separator: '',
            allowRemoveCurrent: true,
            allowAdd: true,
            minFormsCount: 1,
            iniFormsCount: 1,
            maxFormsCount: 10,

            nestedForms: [
                {
                    id: 'JSA-mobile_#index#_potensi_bahaya',
                    options: {
                        separator: '',
                        indexFormat: '#index_potensi#',
                        allowRemoveCurrent: true,
                        allowAdd: true,
                        minFormsCount: 1,
                        iniFormsCount: 1,
                        maxFormsCount: 10
                    }
                },
                {
                    id: 'JSA-mobile_#index#_pengendalian_bahaya',
                    options: {
                        separator: '',
                        indexFormat: '#index_pengendalian#',
                        allowRemoveCurrent: true,
                        allowAdd: true,
                        minFormsCount: 1,
                        iniFormsCount: 1,
                        maxFormsCount: 10
                    }
                }

            ]

        });

    });
</script>
</body>

</html>
