var currentQuote = 0;

$(document).ready(function(){
	$('.slideshow').cycle({ 
		fx: 'fade',
		caption: '.slideshow-caption',
		captionTemplate: '{{cycleTitle}}',
		captionPlugin: 'caption2',
		easing: 'easeInBounce',
		speed: 500,
		timeout: 3000,
	});
	$('#testimonials blockquote').filter(':not(:first)').hide();
	$('.next-quote').on('click', function() {
		scrollTestimonials(1);
	});
	$('.prev-quote').on('click', function() {
		scrollTestimonials(-1);
	});
	$('.equip-explain button').on('click', function() {
		displayEquipInfo(this.dataset.link);
	});
	$('#contact').validate();
	$('form button').on('click', function(event) {
		$('#contact').validate();
		event.preventDefault();
		if ($('#contact').valid() == true) {
			var nameVal = $('#name').val();
			var emailVal = $('#email').val();
			var bodyVal = $('#body').val();
			$.post('send_form_email.php', { name: nameVal, email: emailVal, body: bodyVal },
			function() {
				$('main').append('<p>Thank you for your email. We\'ll be with you shortly.</p>');
			});
		}
		return false;
	});
});

function scrollTestimonials(direction) {
	currentQuote += direction;
	if (currentQuote == $('#testimonials blockquote').length) {
		currentQuote = 0;
	}
	else if (currentQuote < 0) {
		currentQuote = $('#testimonials blockquote').length - 1;
	}
	$('#testimonials blockquote').filter(':visible').fadeOut().promise().done(function() {
		$('#testimonials blockquote').eq(currentQuote).fadeIn();
	});
}

function displayEquipInfo(link) {
	$('.info-window').remove();
	$('<div class="info-window"></div>')
		.css('opacity', '0')
		.animate({'opacity': '1'}, 'fast')
		.appendTo('body')
		.append('<div class="ajax-in"></div>');
		
	$('<div class="close-button-holder"></div>')
		.prependTo($('.info-window'));
		
	$('<img class="close-button">')
		.attr('src', 'img/close-button.png')
		.appendTo($('.close-button-holder'))
		.on('click', function() {
			$('.info-window').fadeOut();
		});
		
	$('.ajax-in').load(link);
}