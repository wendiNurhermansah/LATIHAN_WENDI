// event headling
//const close = document.querySelector('.close');
//const card = document.querySelector('.card');

//close.addEventListener('click', function() {
//	card.style.display = 'none';
//});



// DOM traversal
//const close = document.querySelectorAll('.close');



//for( let i = 0; i < close.length; i++) {
//	close[i].addEventListener('click', function(e) {
		//close[i].parentElement.style.display = 'none';


//		e.target.parentElement.style.display = 'none';

//	});
//}



//close.forEach(function(el) {
//	el.addEventListener('click', function(e) {
//		e.target.parentElement.style.display = 'none';
//		e.preventDefault();
//		e.stopPropagation();
//	});
//});



//const card = document.querySelectorAll('.card');
//card.forEach(function(card) {
//	card.addEventListener('click', function(e) {
//		alert('ok');
//	});
//});



const container = document.querySelector('.container');

container.addEventListener('click', function(e) {
	if(e.target.className == 'close') {
		e.target.parentElement.style.display = 'none';
		e.preventDefault();
	}
});











//const nama = document.querySelector('.nama');
//console.log(nama.parentElement);