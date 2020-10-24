var penumpang = [];
var tambahPenumpng = function(namaPenumpang, penumpang) {
	// jika angkot kosong
	if( penumpang.length == 0 ) {
		// tmbsh penumpang diawal array
		penumpang.push(namaPenumpang);
		// kembalikan isi array dan keluar dari function
		return penumpang;
	} else {
	
		// telusuri seluruh kursi dari awal
		for( var i = 0; i < penumpang.length; i++ ) {
			// jika ada kursi kosong
			if( penumpang[i] == undefined ) {
				// tambah penumpang di kursi kosonng
				penumpang[i] = namaPenumpang;
				// kembalikan isi array dan keluar dari 
				return penumpang;
			}
			// jika udah ada nama yang sama 
			else if( penumpang[i] == namaPenumpang ) {
				// tampilkan pesan kesalahan nya
				console.log(namaPenumpang + ' sudah ada di dalam angkot.');
				// kembalikan isi array dan krluar dari function 
				return penumpang;
			}
			// jika seluruh kursi terisi
			else if( i == penumpang.length - 1 ) {
				// tambah penumpag di akhir array
				penumpag.push(namaPenumpang);
				// kembalikan isi array dan keluar dari function
				return penumpang;
			}
		}

 	}
}


var hapusPeumpang = function(namaPenumpang, penumpang) {
	if( penumpang.length == 0 ) {
		console.log('angkot masih kosong.');
		return penumpang;
	} else {
		for( var i = 0; i < penumpang.length; i++) {
			if( penumpang[i] == namaPenumpang) {
				penumpang[i] = undefined;
				return penumpang;
				
			} else if( i == penumpang.length - 1) {
				console.log(namaPenumpang + ' tidak ada di dalam angkot.');
				return penumpang;
				
			}
		}
	}


}

















