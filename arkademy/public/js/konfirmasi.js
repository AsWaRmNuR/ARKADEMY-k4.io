function buku_tamu() {
	var v_nama = document.fm_buku.txtnama.value;
	var v_emaial = document.fm_buku.txtemail.value;
	var v_komentar = document.fm_buku.txtkomentar.value;
	var kosong = " tidak boleh kosong ";

	if (v_nama == "") {
		alert("nama" + kosong);
	} else if (v_emaial == "") {
		alert("email" + kosong);
	} else if (v_komentar == "") {
		alert("komentar" + kosong);
	} else {
		document.fb_buku.submit();
	}

}
function konfirmasi_login()
{
	var v_user_mail=document.fm_login.txt_user_mail.value;
	var v_password =document.fm_login.txt_mail.value;
	var kosong= "file tidak boleh kosong";

	if (v_user_mail=="") 
	{
		alert("user mail "+kosong);
	}else if(v_password=="")
	{
		alert("password "+kosong);
	}else{
		document.fm_login.fsubmit();
	}
}

function konfirmasi_register() {
	var V_user = document.fm_registrasi.txt_user.value;
	var v_nama = document.fm_registrasi.txt_name.value;
	var v_pass = document.fm_registrasi.txt_pass.value;
	var v_mail = document.fm_registrasi.txt_mail.value;
	var kosong = " tidak boleh kosong ";

	if (V_user == "") {
		alert("user" + kosong);
	} else if (v_nama == "") {
		alert("name" + kosong);
	} else if (v_pass == "") {
		alert("password" + kosong);
	} else if (v_mail == "") {
		alert("mail" + kosong);
	} else {
		document.fm_registrai.submit();
	}
}

function konfirmasi_katagori() {
	var v_katagori = document.fm_katagori.txt_katagori.value;
	var kosong = " tidak boleh kosong ";

	if (v_katagori == "") {
		alert("user" + kosong);
	} else {
		document.fm_katagori.submit();
	}
}

function konfirmasi_supplier() {
	
	var v_perusaan = document.fm_supplier.txt_perusaan.value;
	var v_alamat = document.fm_supplier.txt_alamat.value;
	var v_telpon = document.fm_supplier.txt_nomor_telpon.value;
	var v_txt_email = document.fm_supplier.txt_email.value;
	var v_CP = document.fm_supplier.txt_CP.value;
	var kosong = "tidak boleh kosong";
	
	if (v_perusaan == "") {
		alert("perusaan " + kosong);
	} else if (v_alamat == "") {
		alert("alamat " + kosong);
	} else if (v_telpon == "") {
		alert("nomor telpon " + kosong);
	} else if (v_txt_email == "") {
		alert("email " + kosong);
	} else if (v_CP == "") {
		alert("contak person " + kosong);
	} else {
		document.fm_supplier.submit();
	}
}

function karakter(evt) {
	var kode = (evt.which) ? evt.which : event.keycode;

	if (kode >= 65) {
		return true;
	} else if (kode == 32) {
		return true;
	} else if (kode == 8) {
		return true;
	} else {
		return false;
	}
}

function angka(evt) {
	var kode = (evt.which) ? evt.which : event.keycode;

	if (kode >= 65) {
		return false;
	} else if (kode == 32) {
		return false;
	} else {
		return true;
	}
}