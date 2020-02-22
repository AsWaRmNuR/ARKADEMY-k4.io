function registrasi()
{
	var v_Username=document.fm_regis.Username.value;
	var v_Password=document.fm_regis.Password.value;
	var v_Nama=document.fm_regis.Nama.value;
	var v_Email=document.fm_regis.Email.value;
	var v_NO_hp=document.fm_regis.NO_hp.value;
	var v_kosong="tidak boleh kosong";
	
	if (v_Username=="") {
		alert("Username"+v_kosong);
	}
	else if (v_Password=="") {
		alert("Password"+v_kosong);
	}
	else if (v_Email=="") {
		alert("email"+v_kosong);
	}
	else if (v_Nama=="") {
		alert("Nama"+v_kosong);
	}
	else if (v_NO_hp=="") {
		alert("NO_hp"+v_kosong);
	}else   {
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