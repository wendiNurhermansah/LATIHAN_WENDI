// spread operator
// memecah menjadi single element

// const mhs = [ 'wendi', 'teguh', 'adrian'];
// console.log(...mhs[0]);

// menggabungkan dua array

// const mhs = [ 'wendi', 'teguh', 'adrian'];
// const dosen = ['ade', 'hendra', 'wenda'];
// const orang = [...mhs,...dosen];
// console.log(orang);

// rest parameter

function myFunc(...myArgs)  {
	return myArgs;

}

console.log(myFunc(1, 2, 3, 4, 5));