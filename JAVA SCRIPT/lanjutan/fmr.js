const angka = [-1,8,9,1,4,-5,-4,3,2,9];

// filter 
// const newAangka = angka.filter(a => a >= 3);

// console.log(newAangka);

// map
// kalikan dua semua element
// const newAangka = angka.map(a => a * 2);
// console.log(newAangka);

// reduce
// jumlahkan seluruh element para array
const newAangka = angka.reduce((accumulator, currentValue) => accumulator + currentValue);
console.log(newAangka);