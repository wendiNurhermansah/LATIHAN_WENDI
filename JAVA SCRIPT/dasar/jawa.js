var tanya = true;
while ( tanya ) {
	// menangkap pilihan player

	var p = prompt('pilih : gajah, semut, orang');

	// menangkap pilihan computer
	// membangkitkan bilangan random
	var comp = Math.random();
	console.log(comp);

	if(comp < 0.34 ) {
		comp = 'gajah';
	} else if( comp >= 0.34 && comp < 0.67 ) {
		comp = 'orang';
	} else {
		comp = 'semut';
	}

	console.log(comp);
	var hail = '';

	// menentukan rules
	if( p == comp ) {
		hasil = 'seri';
	} else if( p == 'gajah' ) {
		hasil == ( comp == 'orang' ) ? 'menang' : 'kalah';
	} else if( p == 'orang' ) {
		hasil = ( comp == 'gajah' ) ? 'kalah' : 'menang';
	} else if( p == 'semut' ) {
		hasil = ( comp == 'orang' ) ? 'kalah' : 'menang';
	} else {
		hasil = 'memasukan pilihan yang salah';
	}

	// tampilkan hasilnya
	alert('kamu memilih : ' + p + ' dan komputer memilih : ' + comp + '\nmaka hasilnya : kamu ' + hasil);

	tanya = confirm('lagi?');
}

alert('terimakasih telah bermain.');