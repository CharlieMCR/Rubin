jQuery(document).ready(function($) {

	var $sliderContainer = $('.image-gallery');
	var $slide = $('> >', $sliderContainer);
	var $overlay = $('<div id="overlay"></div>');
	var $innerOverlay = $('<div class="image-lb image-gallery"></div>');
	var $ulLb = $('<ul>/<ul>');
	var $img = '';
	var $images = $('img', $slide);
	var i = 0;
	var j = 0;
	var $slider = '';

	// function setHeight() {
	// 	var $projectHeight = $('.project').map(function() {
	// 		return $(this).height();
	// 	}).get();
	// 	$projectHeight = Math.max.apply(Math, $projectHeight);
	// 	$('.project').css({'height': $projectHeight});
	// }
	// // setHeight();

	function navigation(div) {
		div.prepend('<p id="prev" class="prev slide-direction"><</p>');
		div.append('<p id="next" class="next slide-direction">></p>');
		$slider = $('> >', div);
		return $slider;
	}

	function slideNav(direction, slider) {
		if (direction == -1) {
			if (i > 0) {
				i--;
				showSlide(i, slider);
			}
		};
		if (direction == 1) {
			if (i >= $slide.length-1) {
				i = 0;
				showSlide(i, slider);
			} else {
				i++;
				showSlide(i, slider);
			};
		};
	}

	function showSlide(i) {
		$slide.hide();
		$slide.eq(i).show();
		// $slide.eq(i+1).show();
	}

	if ($slide.length > 1) {
		showSlide(i);
		navigation($sliderContainer);
	};

	function lightbox() {
		var $div = $('<div></div>');
		$slide.each(function(i) {
			$div.append('<img>');
			$('img', $div).eq(i).attr('src', $slide.eq(i).attr('href'));
			$('img', $div).eq(i).attr('alt', $('img', $slide).eq(i).attr('alt'));
		});
		$innerOverlay.append($div);
		$overlay.append($innerOverlay);
		$('body').append($overlay);
		$img = $('img', $div);
		navigation($innerOverlay);
		return $innerOverlay;
		return $img;
		$slide = $img;
	}

	function closeOverlay() {
		i = j;
		$overlay.hide();
		$slide = $('> >', $sliderContainer);
	}
	lightbox();

	$('.prev').on('click', function(){slideNav(-1, $slide)});
	$('.next').on('click', function(){slideNav(1, $slide)});

	$slide.click(function(event) {
		event.preventDefault();
		$overlay.css({'display': 'flex'});
		$slide = $img;
		j = i;
		showSlide(i);
		return j;
	})

	$(document).keydown(function(e) {
		if (e.keyCode === 27) {
			closeOverlay();
		}
	});

	$overlay.click(function(e) {
		if (e.target.id === 'overlay') {
			closeOverlay();
		};
	})
	
}); // end ready