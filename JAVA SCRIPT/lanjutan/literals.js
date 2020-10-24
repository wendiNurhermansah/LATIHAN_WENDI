const mhs = {
	nama: 'wendi',
	umur: 23,
	nrp: '20202029',
	email: 'wendi@gmil.co.id'

};

const el = `<div class="mhs">
	<h2>${mhs.nama}</h2>
	<span class="nrp">${mhs.nrp}</span>
</div>`;

document.body.innerHTML = el;
