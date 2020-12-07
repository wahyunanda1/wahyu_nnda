 <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-lg-7">

        <div class="card o-hidden border-0 shadow-lg my-5 mx-auto">
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
                    <h5 class="h5 text-gray-900 mb-4">Masuk Akun!</h5>
                  </div>
                  <?= $this->session->flashdata('message');  ?>
                  <form class="user" method="post" action="<?= base_url('auth');  ?>">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Masukkan alamat email anda..." value="<?= set_value('email'); ?>" autocomplete="off" required>
                       <?= form_error('email', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Masukkan password anda...">
                       <?= form_error('password', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>
                    <button type="submit" name="login" class="btn btn-primary btn-user btn-block">
                      Masuk
                    </button>
                    <hr>
                  </form>
                  <div class="text-center">
                    <a class="small" href="<?= base_url('auth/lupapassword');  ?>">Lupa Password?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="<?= base_url('auth/registrasi'); ?>">Registrasi Akun!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>