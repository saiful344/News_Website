const flashdata= $('.flash-data').data('flashdata');
if (flashdata == "Added") {
	   Swal.fire({
       position: 'top-end',
       type: 'success',
       title: 'Your work has been saved',
       showConfirmButton: false,
      timer: 1500
  	});
	} else if(flashdata == "Delete"){
	  Swal.fire({
		title:'This Data',
		text:'Succes to ' + flashdata,
		type:'success'
		});
}
$('.data-hapus').on('click',function(event){
	event.preventDefault();
	const hapus = $(this).attr('href');
	Swal.fire({
	  title: 'Are you sure?',
	  text: "You won't be able to revert this!",
	  type: 'warning',
	  showCancelButton: true,
	  confirmButtonColor: '#3085d6',
	  cancelButtonColor: '#d33',
	  confirmButtonText: 'Yes, delete it!'
	}).then((result) => {
	  if (result.value) {
	      document.location.href = hapus;  
	  }
	})
})
