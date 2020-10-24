// cara untuk membuat object padaa javacript
// 1. objek riteral
// 	let mahasiswa = {
// 		nama: 'sandika',
// 		energi: 10,
// 		makan: function(porsi) {
// 			this.energi = this.energi + porsi;
// 			console.log('halo ${this.nama}, selamat makan')
// 		}
// 	}
// // 2. funtion declarator

 // 	function Mahasiswa(nama, energi) {
 // 		let Mahasiswa = {};
 // 		Mahasiswa.nama = nama;
 // 		Mahasiswa.energi = energi;

 // 		Mahasiswa.makan = function(porsi) {
 // 			this.energi += porsi;
 // 			console.log('halo ${this.nama}, selamat makan');
 // 		}
 // 		 return Mahasiswa;

 // 	}
 
 // let sandika = Mahasiswa('sandika', '30');




// 3. contructor function


// function Mahasiswa(nama, energi) {
 		
//  		this.nama = nama;
//  		this.energi = energi;

//  		this.makan = function(porsi) {
//  			this.energi += porsi;
//  			console.log('halo ${this.nama}, selamat makan');
//  		}
 		

//  	}
//  	let sandika = new Mahasiswa('sandika', 30);
 
 




// prototype
// function Mahasiswa(nama, energi) {
 		
//  		this.nama = nama;
//  		this.energi = energi;

//  		Mahasiswa.prototype.makan = function(porsi) {
//  			this.energi += porsi;
//  			return'halo ${this.nama}, selamat makan';
//  		}
 		

//  	}
//  	let sandika = new Mahasiswa('sandika', 30);
//  


// versi class
class Mahasiswa {
	contructor(nama, energi) {
		this.nama = nama;
		this.energi = energi;
	}

	makan(porsi) {
		this.energi += porsi;
		return 'halo ${this.nama}, selamat makan';
	}
}

let sandika = new Mahasiswa ('sandika', 30);