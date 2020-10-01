<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12">
      <div class="card mb-4">
        <div class="card-header">
          <h5><b>Data Barang Elektronik</b></h5>
        </div>
        <div class="card-body">
           <div class="box-body" style="overflow-x: auto;">
              <table id="table-elektronik" class="table table-bordered table-striped" style="text-align: center;">
                  <thead>
                   
                		<tr>
                			<th>No.</th>
                			<th>Tanggal dan Waktu</th>
                			<th>Nama Barang</th>
                			<th>Kondisi Barang</th>
                			<th>Jumlah</th>
                		</tr>
                  </thead>

                		<?php
                			include 'koneksi.php';
                			$no=1;
                			$tampil=mysqli_query($query,"SELECT * FROM tb_elektronik");mysqli_error($query);
                			$panggil= mysqli_num_rows($tampil);
                			while ($hasil=mysqli_fetch_array($tampil)) {

                		?>
                  <tbody>
                		<tr>
                			<td><?php echo $no++; ?></td>
                			<td><?php echo $hasil['waktu_diinput']; ?></td>
                			<td><?php echo $hasil['nama_barang']; ?></td>
                			<td><?php echo $hasil['kondisi_barang']; ?></td>
                			<td><?php echo $hasil['jumlah']; ?></td>
                		</tr>
                	
                		<?php
                			}
                			?>
                  </tbody>
                </table>
              </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12">
      <div class="card mb-4">
        <div class="card-header">
          <h5><b>Data Barang Non Elektronik</b></h5>
        </div>
        <div class="card-body">
           <div class="box-body" style="overflow-x: auto;">
              <table id=table-nonelektronik class="table table-bordered table-striped" style="text-align: center;">
                  <thead>
                    <tr>
                			<th>No.</th>
                			<th>Tanggal dan Waktu</th>
                			<th>Nama Barang</th>
                			<th>Kondisi Barang</th>
                			<th>Jumlah</th>
                		</tr>
                  </thead>
                  <tbody>
              		<?php
              			include 'koneksi.php';
              			$no=1;
              			$tampil=mysqli_query($query,"SELECT * FROM tb_nonelektronik");mysqli_error($query);
              			$panggil= mysqli_num_rows($tampil);
              			while ($hasil=mysqli_fetch_array($tampil)) {

              		?>

              		<tr>
              			<td><?php echo $no++; ?></td>
              			<td><?php echo $hasil['waktu_diinput']; ?></td>
              			<td><?php echo $hasil['nama_barang']; ?></td>
              			<td><?php echo $hasil['kondisi_barang']; ?></td>
              			<td><?php echo $hasil['jumlah']; ?></td>
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