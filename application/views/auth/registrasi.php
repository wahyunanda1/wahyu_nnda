<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg">
            <style>
                  img{
                    padding-top: 20px;
                    margin-bottom: auto;
                    margin-top: auto;
                    margin-left: auto;
                    margin-right: auto;
                    display: block;
                    width: 130px;
                  }
                </style>
                <div class="logo">
                   <img src="<?php echo base_url('assets/img/Smik04.png')?>" id ="Smik04 Logo">
                </div>
            <div class="p-3">
              <div class="text-center">
                 <h4 class="h4 text-gray-900 mb-4"><b>INVENTARISASI SEKOLAH</b></h4>
                <h5 class="h5 text-gray-900 mb-4">Registrasi Akun!</h5>
              </div>
              <?= $this->session->flashdata('message');  ?>
              <form class="user" method="post" action="<?= base_url('auth/registrasi');  ?>">
                 <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Masukkan nama lengkap anda..."  value="<?= set_value('nama'); ?>">
                  <?= form_error('name', '<small class="text-danger pl-3">', '</small>');  ?>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Masukkan alamat email anda..."  value="<?= set_value('email'); ?>">
                  <?= form_error('email', '<small class="text-danger pl-3">', '</small>');  ?>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Masukkan password anda...">
                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>');  ?>
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Ulangi password anda...">
                  </div>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                  Registrasi
                </button>
                <hr>
              <div class="text-center">
                <a class="small" href="<?= base_url('auth'); ?>">Sudah punya akun? Silahkan Masuk!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>