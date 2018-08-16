<!DOCTYPE html>
<html lang="en">
<head>

    <!-- <meta http-equiv="refresh" content="2" > -->
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/master.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HSE - Izin Pekerjaan Berbahaya</title>
    
    
</head>

<body class="ipb">
    <div class="col-lg-12 ipb-back">
        <div class="container">
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-10">
                    <div class="ipb-form">
                        <div class="merah"></div>
                        <div class="form"><br>
                            <center>
                                <h2>Izin Pekerjaan Berbahaya Ketinggian</h2>
                            </center>
                            <hr>
                            
                            <small>*Silahkan isi form IPB Ketinggian</small>
                            

                            <form action="/IPB/ketinggian" method="post">
                                    
                                <table class="table-striped table-hover table-sm mt-3">

                                    
                                    <thead class="text-center align-middle">
                                        <tr>
                                            <th rowspan="2" class="col-lg-5">Persyaratan Pekerjaan</th>
                                            <th colspan="2">Pemenuhan</th>
                                            <th rowspan="2">Keterangan</th>
                                        </tr>
                                        <tr class="align-content-center">
                                            <th class="col-lg-2">Ya</th>
                                            <th class="col-lg-2">Tidak</th>
                                        </tr>
                                    </thead>
                                    

                                    
                                    <tbody>
                                        
                                        <tr>
                                            <td>Apakah tersedia APD yang memadai (full body hardness, helm, sepatu)?</td>
                                            <td class="text-center pt-2">
                                                <div class="ipb-forms">
                                                    <label>
                                                        <input type="radio" name="pemenuhan_1" id="Ya" value="Ya" class="option-input radio">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center pt-2">
                                                <div class="ipb-forms">
                                                    <label>
                                                        <input type="radio" name="pemenuhan_1" id="Tidak" value="Tidak" class="option-input radio">
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" name="keterangan_1" id="keterangan" class="form-control" placeholder="(Jika Ada)">
                                            </td>
                                        </tr>
                                        
                                        
                                        <tr>
                                            <td>Apakah tersedia peralatan yang memadai (tangga, platform)?</td>
                                            <td class="text-center pt-2">
                                                <div class="ipb-forms">
                                                    <label>
                                                        <input type="radio" name="pemenuhan_2" id="Ya" value="Ya" class="option-input radio">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center pt-2">
                                                <div class="ipb-forms">
                                                    <label>
                                                        <input type="radio" name="pemenuhan_2" id="Tidak" value="Tidak" class="option-input radio">
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" name="keterangan_2" id="keterangan" class="form-control" placeholder="(Jika Ada)">
                                            </td>
                                        </tr>
                                        
                                        
                                        <tr>
                                            <td>Apakah dilakukan pengecekan terhadap kondisi tangga?</td>
                                            <td class="text-center pt-2">
                                                <div class="ipb-forms">
                                                    <label>
                                                        <input type="radio" name="pemenuhan_3" id="Ya" value="Ya" class="option-input radio">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center pt-2">
                                                <div class="ipb-forms">
                                                    <label >
                                                        <input type="radio" name="pemenuhan_3" id="Tidak" value="Tidak" class="option-input radio">
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" name="keterangan_3" id="keterangan" class="form-control" placeholder="(Jika Ada)">
                                            </td>
                                        </tr>
                                        
                                        
                                        <tr>
                                            <td>Apakah scaffolding/perancah diperiksa kondisinya (pada saat awal, pada paling tidak 7 hari sekali, dan pada kondisi darurat?</td>
                                            <td class="text-center pt-2">
                                                <div class="ipb-forms">
                                                    <label>
                                                        <input type="radio" name="pemenuhan_4" id="Ya" value="Ya" class="option-input radio">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center pt-2">
                                                <div class="ipb-forms">
                                                    <label >
                                                        <input type="radio" name="pemenuhan_4" id="Tidak" value="Tidak" class="option-input radio">
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" name="keterangan_4" id="keterangan" class="form-control" placeholder="(Jika Ada)">
                                            </td>
                                        </tr>
                                    </tbody>
                                    

                                </table>

                                
                                <div class="mt-5">
                                    <small>*Pastikan anda telah mengisi form dengan benar sebelum melanjutkan</small>
                                </div>
                                

                                
                                <div class="row">
                                    <div class="col"><hr></div>
                                    <div class="col-lg-1"><small>IPB</small></div>
                                    <div class="col"><hr></div>
                                </div>
                                

                                <div class="row">
                                    <div class="col-lg-12">

                                        <input type="submit" value="Submit" class="btn btn-primary float-right">
                                        <?php echo e(csrf_field()); ?>

                                    </div>
                                </div>

                            </form>
                            
                            
                        </div>
                    </div>    
                <div>
            </div>
        </div>    
    </div>





<script type="text/javascript" src="<?php echo e(URL::asset('js/jquery-1.4.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(URL::asset('js/jquery.sheepItPlugin.js')); ?>"></script>
<script>


</script>
</body>

</html>