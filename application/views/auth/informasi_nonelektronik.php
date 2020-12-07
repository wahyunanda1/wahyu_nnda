<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Informasi Barang Sekolah</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <!-- <link href="utama/css/sb-admin-2.min.css" rel="stylesheet"> -->
    <!-- <link href="utama/css/style.css" rel="stylesheet"> -->
    <link href="<?php echo base_url('assets/'); ?>utama/css/sb-admin-2.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/'); ?>utama/css/style.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <?php 
    $background_color = array("#f53b57", "#6c5ce7", "#ff9f43", "#0984e3", "#2ec4b6", "#7E57C2");
    
    $i = 0;
    function set_background_color($background_color, &$i) {
      $count = count($background_color);
      if ($i == $count) {
        $i = 0;
      }
      return $background_color[$i++];
    }

  ?>

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h3 text-gray-900 mb-3"><b>INFORMASI BARANG SEKOLAH</b></h1>
                                        <h2 class="h4 text-gray-900 mb-4"><b>SMKN 4 KENDARI</b></h2>


                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="px-5">
                              <h4 class="h4 text-gray-900 mb-4 text-center"><b><?= $keterangan ?></b></h4>
                              <table id="example1" class="table table-bordered table-striped" style="text-align: center;">
                                <thead>
                                  <tr>
                                    <th>No.</th>
                                    <th>Tanggal dan Waktu</th>
                                    <th>Nama Barang</th>
                                    <th>Kondisi Barang</th>
                                    

                                  </tr>
                                </thead>
                                <?php 
                                        $id_barang = 1;
                                        foreach ($tb_nonelektronik as $tb_nlk) {
                                   ?>
                                <tbody>
                                  <tr>
                                    <td><?= $id_barang ++ ?></td>
                                    <td><?= $tb_nlk->waktu_diinput ?></td>
                                    <td><?= $tb_nlk->nama_barang ?></td>
                                    <td><?= $tb_nlk->kondisi_barang ?></td>
                                    
                                    
                                  </tr>   
                                <?php } ?>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                      <a class="btn btn-primary btn-user btn-block" href="<?= base_url() ?>"><b>Kembali</b></a>
                                        <!-- <a class="small" href="<?= base_url('auth') ?>">MASUK</a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>