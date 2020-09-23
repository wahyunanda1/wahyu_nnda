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
                    <h5 class="h5 text-gray-900 mb-4">Lupa Password Anda?</h5>
                  </div>
                  <?= $this->session->flashdata('message');  ?>
                  <form class="user" method="post" action="<?= base_url('auth/lupapassword');  ?>">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Masukkan alamat email anda..." value="<?= set_value('email'); ?>">
                       <?= form_error('email', '<small class="text-danger pl-3">', '</small>');  ?>
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      Ganti Password
                    </button>
                    <hr>
                  </form>
                  <div class="text-center">
                    <a class="small" href="<?= base_url('auth'); ?>"> Kembali Ke Halaman Masuk.</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>