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
                                <h2>Izin Pekerjaan Berbahaya Kebakaran</h2>
                            </center>
                            <hr>
                            
                            <small>*Silahkan isi form IPB Kebakaran</small>
                            

                            <form action="/IPB/kebakaran" method="post">
                                    
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
                                            <td colspan="4" class="font-weight-bold">
                                                Umum
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td>Tersedia alat pemadam api (APAR)?</td>
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
                                            <td>Tersedia alarm kebakaran?</td>
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
                                            <td>Peralatan yang dipakai dalam kondisi baik?</td>
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
                                            <td>Rute evakuasi memadai bagi pekerja?</td>
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
                                        
                                        
                                        <tr>
                                            <td>Perisa perlindungan memadai?</td>
                                            <td class="text-center pt-2">
                                                <div class="ipb-forms">
                                                    <label>
                                                        <input type="radio" name="pemenuhan_5" id="Ya" value="Ya" class="option-input radio">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center pt-2">
                                                <div class="ipb-forms">
                                                    <label >
                                                        <input type="radio" name="pemenuhan_5" id="Tidak" value="Tidak" class="option-input radio">
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" name="keterangan_5" id="keterangan" class="form-control" placeholder="(Jika Ada)">
                                            </td>
                                        </tr>
                                        
                                        
                                        <tr>
                                            <td>Memasang rambu?</td>
                                            <td class="text-center pt-2">
                                                <div class="ipb-forms">
                                                    <label>
                                                        <input type="radio" name="pemenuhan_6" id="Ya" value="Ya" class="option-input radio">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center pt-2">
                                                <div class="ipb-forms">
                                                    <label >
                                                        <input type="radio" name="pemenuhan_6" id="Tidak" value="Tidak" class="option-input radio">
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" name="keterangan_6" id="keterangan" class="form-control" placeholder="(Jika Ada)">
                                            </td>
                                        </tr>
                                        
                                        
                                        <tr>
                                            <td>Tidak berada pada area yang berdekatan dengan bahan mudah terbakar atau memicu ledakan?</td>
                                            <td class="text-center pt-2">
                                                <div class="ipb-forms">
                                                    <label>
                                                        <input type="radio" name="pemenuhan_7" id="Ya" value="Ya" class="option-input radio">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center pt-2">
                                                <div class="ipb-forms">
                                                    <label >
                                                        <input type="radio" name="pemenuhan_7" id="Tidak" value="Tidak" class="option-input radio">
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" name="keterangan_7" id="keterangan" class="form-control" placeholder="(Jika Ada)">
                                            </td>
                                        </tr>
                                        
                                        
                                        <tr>
                                            <td>Membersihkan area kerja sebelum pelaksanaan kegiatan (bersih dari debu, serat, minyak)?</td>
                                            <td class="text-center pt-2">
                                                <div class="ipb-forms">
                                                    <label>
                                                        <input type="radio" name="pemenuhan_8" id="Ya" value="Ya" class="option-input radio">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center pt-2">
                                                <div class="ipb-forms">
                                                    <label >
                                                        <input type="radio" name="pemenuhan_8" id="Tidak" value="Tidak" class="option-input radio">
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" name="keterangan_8" id="keterangan" class="form-control" placeholder="(Jika Ada)">
                                            </td>
                                        </tr>
                                        
                                        
                                        <tr>
                                            <td>Lantai mudah terbakar atau bereaksi terhadap api perlu dilapisi dengan bahan/terpal yang lebih tahan api?</td>
                                            <td class="text-center pt-2">
                                                <div class="ipb-forms">
                                                    <label>
                                                        <input type="radio" name="pemenuhan_9" id="Ya" value="Ya" class="option-input radio">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center pt-2">
                                                <div class="ipb-forms">
                                                    <label >
                                                        <input type="radio" name="pemenuhan_9" id="Tidak" value="Tidak" class="option-input radio">
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" name="keterangan_9" id="keterangan" class="form-control" placeholder="(Jika Ada)">
                                            </td>
                                        </tr>
                                        
                                        
                                        <tr>
                                            <td>Pastikan ruangan bersih dari uap yang mudah terbakar (bahan bakar/chemical)?</td>
                                            <td class="text-center pt-2">
                                                <div class="ipb-forms">
                                                    <label>
                                                        <input type="radio" name="pemenuhan_10" id="Ya" value="Ya" class="option-input radio">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center pt-2">
                                                <div class="ipb-forms">
                                                    <label >
                                                        <input type="radio" name="pemenuhan_10" id="Tidak" value="Tidak" class="option-input radio">
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" name="keterangan_10" id="keterangan" class="form-control" placeholder="(Jika Ada)">
                                            </td>
                                        </tr>
                                        
                                        
                                        <tr>
                                            <td>Bejana tekan, perpipaan dan peralatan bebas dari perbaikan, isolasi dan angin?</td>
                                            <td class="text-center pt-2">
                                                <div class="ipb-forms">
                                                    <label>
                                                        <input type="radio" name="pemenuhan_11" id="Ya" value="Ya" class="option-input radio">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center pt-2">
                                                <div class="ipb-forms">
                                                    <label >
                                                        <input type="radio" name="pemenuhan_11" id="Tidak" value="Tidak" class="option-input radio">
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" name="keterangan_11" id="keterangan" class="form-control" placeholder="(Jika Ada)">
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td colspan="4" class="font-weight-bold">
                                                Pengawasan Kebakaran
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td><i>Pelaksana atau pengawas kegiatan paham bagaimana cara menggunakan APAR?</i></td>
                                            <td class="text-center pt-2">
                                                <div class="ipb-forms">
                                                    <label>
                                                        <input type="radio" name="pemenuhan_12" id="Ya" value="Ya" class="option-input radio">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center pt-2">
                                                <div class="ipb-forms">
                                                    <label >
                                                        <input type="radio" name="pemenuhan_12" id="Tidak" value="Tidak" class="option-input radio">
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" name="keterangan_12" id="keterangan" class="form-control" placeholder="(Jika Ada)">
                                            </td>
                                        </tr>
                                        
                                        
                                        <tr>
                                            <td><i>Melakukan pengecekan area kerja setelah pekerjaan selesai(mematikan alat yang dipakai dan sumber bahan bakar yang dipakai)?</i></td>
                                            <td class="text-center pt-2">
                                                <div class="ipb-forms">
                                                    <label>
                                                        <input type="radio" name="pemenuhan_13" id="Ya" value="Ya" class="option-input radio">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center pt-2">
                                                <div class="ipb-forms">
                                                    <label >
                                                        <input type="radio" name="pemenuhan_13" id="Tidak" value="Tidak" class="option-input radio">
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" name="keterangan_13" id="keterangan" class="form-control" placeholder="(Jika Ada)">
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