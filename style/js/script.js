jQuery(document).ready(function($) {

});

function pasienDelete(kode_pasien) {
	var dialog = confirm("Anda yakin akan menghapus data dengan ID " + kode_pasien + "?");
	if (dialog == true) {
		var konfirmasi = confirm("Menghapus data pasien akan menghapus seluruh history medis dalam database.");
		if (konfirmasi == true) {
			window.location.href='pasien/delete/'+kode_pasien;
		} else {
			alert('Aksi dibatalkan');
		}
	} else {
		alert('aksi dibatalkan');
	}
}