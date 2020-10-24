// function init () {
// 	//let nama = 'wendi';
// 	return function (nama) {
// 		console.log(nama);
// 	}
	
// }
// let panggilNama = init();
// panggilNama('wendi');
// panggilNama('dia');


function ucapkanSalam(waktu) {
	return function(nama) {
		console.log('halo ${nama}, selamat ${waktu}, semoga harimu menyenangkan');

	}
}

let selamatPagi = ucapkanSalam('pagi');
let selamatSiang = ucapkanSalam('siang');
let selamatMalam = ucapkanSalam('malam');

selamatPagi('wendi');
selamatMalam('dia');