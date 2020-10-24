const nama = 'wendi';
const umur = 22;

function coba(strings, ...values) {
	return strings.reduce((result, str, i) => `${result}${str}${values[i] || ''}`, '');
}
const str = coba`halo, nama saya ${nama}, saya ${umur} tahun`;
console.log(str);