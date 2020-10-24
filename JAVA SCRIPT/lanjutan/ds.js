// destructuring array

// const perkenalan = ['halo', 'saya', 'wendi'];

// const [salam, satu, dua, nama] = perkenalan;

// console.log(dua);

// swop items
// let a =1;
// let b = 2;
// console.log(a);
// console.log(b);

// [a, b] = [b, a];
// console.log(a);
// console.log(b);

// return value pada function
// function coba () {
// 	return [1, 2];
// }

// const a = coba();
// console.log(a);

// rest parameter
// const [a, ...values] = [1, 2, 3, 4, 5];
// console.log(a);
// console.log(values);




// distructuring object
// const mhs = {
// 	nama: 'wendi',
// 	umur: 22
// }

// const { nama, umur } = mhs;
// console.log(nama); 


// //drsturing perkalian
function penjumlahanPerkalian(a, b) {
	return [a + b, a * b];
} 

// const jumlah = penjumlahanPerkalian(2, 3)[0];
// const kali = penjumlahanPerkalian(2, 3)[0];
const [jumlah, kali] = penjumlahanPerkalian(2, 3);
console.log(jumlah);
console.log(kali);