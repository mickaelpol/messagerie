$(function(){ // attente du lancement de la fonction jquery

	function animateGlow(){
		div = $('#glow');
		div.css({backgroundPosition: "0 0"})
		.animate({
			'background-position-x': '-3000px',
			'background-position-y': '0px'
		}, 30000, 'linear', animateGlow);
	};

$('#login').prepend('<div id="glowContainer"> <div id="glow"></div></div>'); // ajout de la div avec id glow dans le html
$('#glowContainer').hide(); // on la cache pour ne pas la voir de suite

$('input').focus(function(){ // au clic dans l'input
	$('#glowContainer').stop().fadeIn(); // la lueur apparait en fade
});

$('input').blur(function(){ // quand on quitte un input 
	$('#glowContainer').stop().fadeOut(); // la lueur disparait
});

animateGlow();
});