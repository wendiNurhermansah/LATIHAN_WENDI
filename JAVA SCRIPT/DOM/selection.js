// dom selection
// getElementById

//const judul = document.getElementById('judul');
//judul.style.color = 'red';
//judul.style.backgroundColor = 'yellow';
//judul.innerHTML = 'wendi nurhermansah';

// document.getElementsByTagName('')

//const p = document.getElementsByTagName('p');
//for( let i = 0; i < p.length; i++) {
//p[i].style.backgroundColor = 'blue';
//}

//const h1 = document.getElementsByTagName('h1')[0];
//h1.style.fontSize = '60px';

// document.getElementsByClassName('')

//const p1 = document.getElementsByClassName('p1');
//p1[0].innerHTML = 'bandung garut limbangan';

// document.querySelector()
const p4 = document.querySelector('#b p');
p4.style.color = 'green';

const li2 = document.querySelector('section#b ul li:nth-child(2)');
li2.style.backgroundColor = 'orange';

// document.querySelectorAll()
const p = document.querySelectorAll('p');
p[2].style.backgroundColor = 'navy';