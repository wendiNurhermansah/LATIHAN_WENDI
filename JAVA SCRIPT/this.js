// this
//console.log(this);


// membuat object

 //cara 1 - function declaration
//function halo {
//	console.log(this);
//	console.log('halo');

//}
//this.halo(); 
// this mengembalikan konteks global




























// cara 2 - object literal
//var obj = {a : 10, nama : 'wendi'};
//obj.halo = function() {
//	console.log(this);
//	console.log('halo');
//}
//obj.halo();
// this mengembalikan objek














// cara ketiga - constructor
function Halo() {
	console.log(this);
	console.log('halo');
}

new Halo();
var obj1 = new halo();
var pbj2 = new halo();
// this mengembaikan objek yang baru di buat



