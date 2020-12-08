function ajaxget(id, url) {
  $.ajax({
    type: "GET",
    url: url,
  });
}

function showModal(data) {
  $("#modal").modal("show");
  $('[name="kodeKategori"]').val(data.kode);
  $('[name="namaKategori"]').val(data.nama);
}

// reset modal field ketika close
$("#modal").on("hidden.bs.modal", function (e) {
  $('[name="kodeKategori"]').val("");
  $('[name="namaKategori"]').val("");
});

function deleteData(id) {
  Swal.fire({
    text: "Are you sure want to delete ?",
    showDenyButton: true,
    confirmButtonText: `Delete`,
    showLoaderOnConfirm: true,
  }).then((result) => {
    /* Read more about isConfirmed, isDenied below */
    if (result.isConfirmed) {
      Swal.fire("Saved!", "", "success");
    } else if (result.isDenied) {
      Swal.fire("Changes are not saved", "", "info");
    }
  });
}
