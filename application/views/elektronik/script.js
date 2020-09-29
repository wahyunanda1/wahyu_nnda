	var status = $('#status').data('status');
	if (status == "berhasil-tambah-data") {
		Swal.fire({
		    title: 'Berhasil',
		    text: 'Data Barang berhasil ditambahkan',
		    icon: 'success'
		  })
	}

	else if (status == "berhasil-ubah-data") {
		Swal.fire({
		    title: 'Berhasil',
		    text: 'Data Barang berhasil diubah',
		    icon: 'success'
		  })
	}

	else if (status == "berhasil-hapus-data") {
		Swal.fire({
		    title: 'Berhasil',
		    text: 'Data Barang berhasil dihapus',
		    icon: 'success'
		  })
	}

	$(".tombol-hapus").click(function(e) {
		  e.preventDefault();
		  Swal.fire({
		    title: 'Hapus Data Barang',
		    text: 'Anda Yakin Ingin Menghapus Data Barang?',
		    icon: 'warning',
		    showCancelButton: true,
		    confirmButtonText: 'Ya, Hapus!',
		    cancelButtonText: 'Batal'
		  }).then((result) => {

		    if (result.value) {
		    	window.location = $(this).attr('href');
		      
		    // For more information about handling dismissals please visit
		    // https://sweetalert2.github.io/#handling-dismissals
		    } else if (result.dismiss === Swal.DismissReason.cancel) {
		      Swal.fire(
		        'Di Batalkan!',
		        'Data Anda Dalam Keadaan Aman :)',
		        'error'
		      )
		    }
		  })
	})
