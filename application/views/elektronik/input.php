  <div class="container-fluid">
  <div class="row">
    <div class="col-lg-12">
      <div class="card mb-4">
        <div class="card-header">
          <h4><b>Tambah Data Barang Elektronik</b></h4>
        </div>
        <div class="card-body">
			<div class="box-body">
				<form action="<?= base_url('elektronik/tambah_aksi'); ?>" method="post">
					<div class="form-group row">
				    <div class="col-sm-10">
				      <input type="hidden" class="form-control" id="waktu_diinput" name="waktu_diinput" value="<?php $timezone = time() + (60*60*8); echo gmdate('d-m-Y, H:i:s', $timezone); ?>">
				    </div>
				  </div>
				  <div class="form-group row">
				    <label for="nama_barang" class="col-sm-2 col-form-label">Nama Barang:</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="nama_barang" name="nama_barang" placeholder="Masukan Nama Barang...">
				    </div>
				  </div>
				   <div class="form-group row">
				    <label for="kondisi_barang" class="col-sm-2 col-form-label">Kondisi Barang:</label>
				    <div class="col-sm-10">
				      <select name="kondisi_barang" class="form-control">
                      <option value="">.....</option>
                      <option value="Layak"> Layak </option>
                      <option value="Tidak Layak"> Tidak Layak </option>
                    </select>
				    </div>
				  </div>
				   <div class="form-group row">
				    <label for="jumlah" class="col-sm-2 col-form-label">Jumlah:</label>
				    <div class="col-sm-10">
				      <input type="number" class="form-control" id="jumlah" name="jumlah" placeholder="Masukkan Jumlah Barang...">
				    </div>
				  </div>
				  
				  <div class="form-group row">
				    <div class="col-sm-10">
				      <button type="submit" name="tambah" class="btn btn-primary" style="font-size: 15px;"><i class="fa fa-save"></i> Simpan</button>
				       <a href="<?= base_url('elektronik'); ?>" class="btn btn-success" style="font-size: 15px;"><i class="fa fa-arrow-left" aria-hidden="true"></i> Kembali</a>
				    </div>
				  </div>
				</form>

            	</div>
            	
            </div>
        </div>
    </div>