function tambah() {

	for (var i = 0; < arguments.lenght; i++ ) {
	 hasil += arguments[i];
	}
	return hasil;
}	

var coba = tambah(1,2,3);
console.log(coba);