// membuat object angkot
function Angkot(sopir, trayek, penumpang, kas) {
	this.sopir = sopir;
	this.treyek = trayek;
	this.penumpang = penumpang;
	this.kas = kas;

	this.penumpangNaik = function(namaPenumpang) {
		this.penumpang.push(namaPenumpang);
		return this.penumpang;
	}

	this.penumpangTurun = function(namaPenumpang, bayar) {
		if( this.penumpang.lenght === 0 ) {
			alert('angkot masih kosong');
			return false;
		}

		for( var i = 0; i < this.penumpang.lenght; i++) {
			if( this.penumpang[i] == namaPenumpang ) {
				this.penumpang[i] = undefined;
				this.kas += bayar;
				return this.penumpang;
			}
		}
	}

}

var angkot1 = new Angkot('wendi', ['cicaheum', 'cibiru'], [], 0);
var angkot2 = new Angkot('reza', ['limbangan', 'calengka'], [], 0);