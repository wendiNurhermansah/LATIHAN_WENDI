//const judul = document.getElementById('judul');
//judul.innerHTML = 'wendi nurhermansah';

//const sectionA = document.querySelector('section#a');
//sectionA.innerHTML = 'jakarta';


// nambahin paragraf baru
const pBaru = document.createElement('p');
const teksPBaru = document.createTextNode('paragraf Baru');

// simpan teks ke paragraf baru
pBaru.appendChild(teksPBaru);

// siman pBaru di akhir section A
const sectionA = document.getElementById('a');
sectionA.appendChild(pBaru);

// hapus element
const link = document.getElementsByTagName('a')[0];

sectionA.removeChild(link);

// mengg
const sectionB = document.getElementById('b');
const p4 = sectionB.querySelector('p');

const h2Baru = document.createElement('h2');
const teksH2Baru = document.createTextNode('judul baru');

h2Baru.appendChild(teksH2Baru);

sectionB.replaceChild(h2Baru, p4);