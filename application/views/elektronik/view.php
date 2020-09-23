<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12">
      <div class="card mb-4">
        <div class="card-header">
          <h4><b>Data Barang Elektronik</b></h4>
        </div>
        <div class="card-body">
           <div class="col-md-4">
                <a href="<?= base_url('elektronik/add');  ?>" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data Barang</a>
              </div>
              <br>
           <div class="box-body" style="overflow-x: auto;">
              <table id="example1" class="table table-bordered table-striped" style="text-align: center;">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Tanggal dan Waktu</th>
                      <th>Nama Barang</th>
                      <th>Kondisi Barang</th>
                      <th>Jumlah</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <?php 
                          $id_barang = 1;

                          foreach ($tb_elektronik as $tb_elk) {
                     ?>
                  <tbody>
                    <tr>
                      <td><?= $id_barang ++ ?></td>
                      <td><?= $tb_elk->waktu_diinput ?></td>
                      <td><?= $tb_elk->nama_barang ?></td>
                      <td><?= $tb_elk->kondisi_barang ?></td>
                      <td><?= $tb_elk->jumlah ?></td>
                      <td>   
                        <a href="<?php echo base_url('elektronik/edit/').$tb_elk->id_barang;?>" class="btn btn-success" style="font-size: 13px;"><i class="fa fa-edit"></i> Ubah</a>
                        <a href="<?php echo base_url('elektronik/hapus/').$tb_elk->id_barang;?>" class="btn btn-danger" style="font-size: 13px;" onclick="return confirm('Data barang akan dihapus, Yakin?');" ><i class="fa fa-trash" aria-hidden="true"></i> Hapus</a> 
                      </td>
                      
                    </tr>   
                  <?php } ?>
                  </tbody>
                </table>
              </div>
        </div>
      </div>
    </div>
  </div>
</div>