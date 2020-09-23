 <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-lg-7">

        <div class="card o-hidden border-0 shadow-lg my-5 mx-auto">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg">
                <div class="p-5">
                  <div class="text-center">
                     <h4 class="h4 text-gray-900 mb-4"><b>INVENTARISASI SEKOLAH</b></h4>
                    <h5 class="h5 text-gray-900 mb-4">Ganti Password Anda</h5>
                  </div>
                  <?= $this->session->flashdata('message');  ?>
                  <form class="user" method="post" action="<?= base_url('auth/gantipassword');  ?>">
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Masukkan password baru anda...">
                       <?= form_error('password1', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Ulangi password anda...">
                       <?= form_error('password2', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      Ganti Password
                    </button>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>