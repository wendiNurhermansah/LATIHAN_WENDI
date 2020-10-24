// membuat object
// object literal
var mhs1 = {
	nama : "wendi",
	nrp : "000998277",
	email : "wendi@gmail.com",
	jurudsn : "teknik informatika"
}

var mhs2 = {
	nama : "nurhermansah",
	nrp : "000998288",
	email : "nurhermansah@gmail.com",
	jurudsn : "teknik informatika"
}

// function declaration
function buatObjectMahasiswa(nama, nrp, email, jurusan) {
	var mhs = {};
	mhs.nama = nama;
	mhs.nrp = nrp;
	mhs.email = email;
	mhs.jurusan = jurusan;

	return mhs;
}

var mhs3 = buatObjectMahasiswa('sule', '00008879', 'ule@gmail.com', 'teknik informatika');



// constructor
function Mahasiswa(nama, nrp, email, jurusan) {
	this.nama = nama;
	this.nrp = nrp;
	this.email = email;
	this.jurusan = jurusan;

}

var mhs4 = new Mahasiswa ('rafi', '00008889', 'rafi@gmail.com', 'teknik informatika');
