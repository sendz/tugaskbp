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
	}
}

function diagnosaDelete(kode_diagnosa) {
	var dialog = confirm("Anda yakin akan menghapus data dengan ID " + kode_diagnosa + "?");
	if (dialog == true) {
		var konfirmasi = confirm("Aksi ini tidak bisa dibatalkan setelah dikonfirmasi");
		if (konfirmasi == true) {
			window.location.href='diagnosa/delete/'+kode_diagnosa;
		} else {
			alert('Aksi dibatalkan');
		}
	}
}

function dokterDelete(kode_dokter) {
	var dialog = confirm("Anda yakin akan menghapus data dengan ID " + kode_dokter + "?");
	if (dialog == true) {
		var konfirmasi = confirm("Aksi ini tidak bisa dibatalkan setelah dikonfirmasi");
		if (konfirmasi == true) {
			window.location.href='dokter/delete/'+kode_dokter;
		} else {
			alert('Aksi dibatalkan');
		}
	}
}

function kamarDelete(kode_kamar) {
	var dialog = confirm("Anda yakin akan menghapus data dengan ID " + kode_kamar + "?");
	if (dialog == true) {
		var konfirmasi = confirm("Aksi ini tidak bisa dibatalkan setelah dikonfirmasi");
		if (konfirmasi == true) {
			window.location.href='kamar/delete/'+kode_kamar;
		} else {
			alert('Aksi dibatalkan');
		}
	}
}