$("#btn-submit").click(function(e) {
	  e.preventDefault();
	  Swal.fire({
	    title: 'Edit Data Barang',
	    text: 'Anda Yakin Ingin Mengedit Data Barang?',
	    icon: 'warning',
	    showCancelButton: true,
	    confirmButtonText: 'Ya, Edit!',
	    cancelButtonText: 'Batal'
	  }).then((result) => {

	    if (result.value) {
	    	$("#form-submit").submit();
	      
	    // For more information about handling dismissals please visit
	    // https://sweetalert2.github.io/#handling-dismissals
	    } 
	    // else if (result.dismiss === Swal.DismissReason.cancel) {
	    //   Swal.fire(
	    //     'Di Batalkan!',
	    //     'Data Anda Batal diedit',
	    //     'error'
	    //   )
	    // }
	  })
})