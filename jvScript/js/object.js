// tipe data object		
var manusia = {
nama : "wendi nurhermansah",
alamat  : "garut",
umur       : 30,
pekerjaan  : "programing"
};
 
// menampilkan tipe data object pada element id hasil
document.getElementById("hasil").innerHTML = manusia.nama + " tinggal di " + manusia.alamat + " .dia sekarang berumur"+ manusia.umur +" dan bekerja sebagai " + manusia.pekerjaan;