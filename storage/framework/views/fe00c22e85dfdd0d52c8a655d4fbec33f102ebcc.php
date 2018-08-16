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
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <div class="ipb-box">
                        <div class="merah"></div>
                        <div class="form"><br>
                            <h2>Izin Pekerjaan Berbahaya</h2>
                            
                            
                            <small>Silahkan pilih Form IPB yang dibutuhkan</small>
                            

                            <form action="/IPB" method="post">
                                <div class="mer mt-4">
                                    <input type="checkbox" name="ruang_terbatas" id="ruang_terbatas" value="true">
                                    <label for="ruang_terbatas">Ruang Terbatas</label>
                                </div>
                                <div class="mer">
                                    <input type="checkbox" name="kebakaran" id="kebakaran" value="true">
                                    <label for="kebakaran">Kebakaran</label>
                                </div>
                                <div class="mer">
                                    <input type="checkbox" name="ketinggian" id="ketinggian" value="true">
                                    <label for="ketinggian">Ketinggian</label>
                                </div>
                                <div class="row mt-5">
                                    <div class="col-lg-12"></div>
                                </div>

                                <div class="mt-5">
                                    <small>*Pastikan anda telah memilih berkas yang dibutuhkan dengan benar</small>
                                </div>
                                
                                <div class="row mt-5">
                                    <div class="col-lg-5"><hr></div>
                                    <div class="col-lg-2 text-center">
                                        <small>IPB</small>
                                    </div>
                                    <div class="col-lg-5"><hr></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <button type="submit" class="btn btn-primary float-right">Submit</button>
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
</script>
</body>

</html>