// callback
// synchoronus callbck
function halo(nama) {
	alert(`halo, ${nama}`);

}

function tampilkanPesan(callback) {
	const nama = prompt('Masukan Nama: ');
	callback(nama);
}

tampilkanPesan(halo);