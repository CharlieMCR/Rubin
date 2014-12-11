jQuery(document).ready(function($) {

	var $slider = $('#image-slider');
	var $slideContainer = $('p', $slider);
	var $slides = $('img', $slider);
	var $firstSlide = $('img:first-child', $slider);
	var $slideContainerMargin = parseInt($slideContainer.css('margin-left'));

	if ($slides.length > 1) {
		$slider.width($slides.width()*2);
		$slider.height($slides.height());
		$slider.css('overflow', 'hidden');
		$slider.css('display', 'inline-block');

		$slideContainer.width($slider.width()*$slides.length);
		$firstSlide.css('margin-left', $slides.width());


		function nextSlide() {
			if ($slideContainerMargin > -($slideContainer.width()/2-$slides.width())) {
				$slideContainerMargin-=$slider.width();
			} else {
				$slideContainerMargin = 0;
			};
			$slideContainer.css('margin-left', $slideContainerMargin);
			console.log($slideContainerMargin);
		}

		function prevSlide() {
			if ($slideContainerMargin < 0) {
				$slideContainerMargin+=$slider.width();
				$slideContainer.css('margin-left', $slideContainerMargin);
			}
			console.log($slideContainerMargin);
		}

		$slider.before('<p id="prev" class="slide-direction"><</p>');
		$slider.after('<p id="next" class="slide-direction">></p>');




		$('#next').on('click', nextSlide);
		$('#prev').on('click', prevSlide);
	};




});