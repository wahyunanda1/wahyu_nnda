  <div class="container-fluid">
  <div class="row">
    <div class="col-lg-12">
      <div class="card mb-4">
        <div class="card-header">
          <h4><b>Ubah Data Barang Non Elektronik</b></h4>
        </div>
        <div class="card-body">
			<div class="box-body">

				<form action="<?= base_url('nonelektronik/update_data/' . $id_barang); ?>" method="post" id="form-submit">
					
					<div class="form-group row">
				    <div class="col-sm-10">
				    	<input type="hidden" name="id_barang" value="<?= $id_barang ?>">
				      <input type="hidden" class="form-control" id="waktu_diinput" name="waktu_diinput" value="<?php $timezone = time() + (60*60*8); echo gmdate('d-m-Y, H:i:s', $timezone); ?>">
				    </div>
				  </div>
				  <div class="form-group row">
				    <label for="nama_barang" class="col-sm-2 col-form-label">Nama Barang:</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="<?= set_value("nama_barang") ?>">
				      <?= form_error('nama_barang', '<small class="text-danger pl-2">', '</small>');  ?>
				    </div>
				  </div>
				   <!-- <div class="form-group row">
				    <label for="kondisi_barang" class="col-sm-2 col-form-label">Kondisi Barang:</label>
				    <div class="col-sm-10">
				      <select name="kondisi_barang" class="form-control">
				      	<?php $kelayakan = $tb_nonelektronik->kondisi_barang; ?>
                      <option value="">.....</option>
                      <option value="Layak" <?= $kelayakan == 'Layak' ? 'selected' : '' ?> >Layak </option>
                      <option value="Tidak Layak" <?= $kelayakan == 'Tidak Layak' ? 'selected' : '' ?> > Tidak Layak </option>
                    </select>
				    </div>
				  </div> -->
				  <div class="form-group row">
				    <label for="kondisi_barang" class="col-sm-2 col-form-label">Kondisi Barang:</label>
				    <div class="col-sm-10">
				      <!-- <select name="kondisi_barang" class="form-control">
		              <option value="">.....</option>
		              <option value="Layak"> Layak </option>
		              <option value="Tidak Layak"> Tidak Layak </option>
		            </select> -->
		            <?php 
		            	$pilihan = array(
		            		'' => '....',
		            		'layak' => 'layak',
		            		'tidak layak' => 'tidak layak'
		            	);
		            	$attribut = array(
		            		"class" => "form-control"
		            	);
		             ?>
		            <?= form_dropdown('kondisi_barang', $pilihan, set_value("kondisi_barang"), $attribut) ?>
		            <?= form_error('kondisi_barang', '<small class="text-danger pl-2">', '</small>');  ?>

				    </div>
				   </div>
				   <div class="form-group row">
				    <label for="jumlah" class="col-sm-2 col-form-label">Jumlah:</label>
				    <div class="col-sm-10">
				      <input type="number" class="form-control" id="jumlah" name="jumlah" placeholder="Masukkan Jumlah Barang..." value="<?php echo set_value("jumlah") ?>">
				      <?= form_error('jumlah', '<small class="text-danger pl-2">', '</small>');  ?>
				    </div>
				  </div>
				  <div class="form-group row">
				    <div class="col-sm-10">
				      <button class="btn btn-info tombol-edit" id="btn-submit" type="submit" name="edit" style="font-size: 15px;"><i class="fa fa-edit"></i> Ubah</button>
				       <a href="<?= base_url('nonelektronik'); ?>" class="btn btn-success" style="font-size: 15px;"><i class="fa fa-arrow-left" aria-hidden="true"></i> Kembali</a>
				    </div>
				  </div>

				</form>
            	</div>
            	
            </div>
        </div>
    </div>