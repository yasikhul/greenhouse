const flashData=$('.flash-data').data('flashdata');
const flashDataError=$('.flash-data-error').data('flashdataerror');
if(flashData){
	Swal.fire({
  position: 'center',
  icon: 'success',
  title: flashData,
  showConfirmButton: false,
  timer: 2500
});
};
if(flashDataError){
	Swal.fire({
  icon: 'error',
  title: 'Oops...',
  html: flashDataError,
})
};

// button-hapus

$('.tombol-hapus').on('click',function(e){
	e.preventDefault();
	const link =$(this).attr('href');
	Swal.fire({
  title: 'Apakah Anda Yakin ?',
  text: "Data ini akan terhapus permanen!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Ya, Hapus Data!'
}).then((result) => {
  if (result.value) {
    	document.location.href=link;
  }
})
});

// END button Hapus