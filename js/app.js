jQuery(document).ready(function($) {

    var $container = $('#image-slider'); // div containing slider
    var $slider = $('p', $container); // p tag containing slides
    var $slide = $('>', $slider); // each slide
    var $totalSlides = $slide.length;
    var $sliderMove = parseInt($slider.css('margin-left'));
    var $slideWidth = $slide.width();

    function setHeight() {
	    var $projectHeight = $('.project').map(function() {
	    	return $(this).height();
	    }).get();
	    $projectHeight = Math.max.apply(Math, $projectHeight);
	    $('.project').css({'height': $projectHeight});
	}
	setHeight();

    function setSlide() {
        $slide.css({
            'float': 'left',
            'margin': '0',
            'padding': '0',
            'height': 'auto',
            'max-width': '100%',
            'width': $slideWidth
            });
        $slider.css({
            'width': $slide.width()*$totalSlides*2
        });
        $container.css({
            'width': $slide.width()*2,
            'max-width': '100%'
        });
        
        if ($container.width() < $slideWidth*2) {
            $container.css({'width': $slide.width()});
            if ($container.width() < $slide.width()) {
            	$slide.css({'width': $container.width()});
            } else {
            	$slide.css({'width': $slideWidth});
            };
        };

        // move first slide to right half if two slides displayed
        if ($container.width()/$slide.width() > 1) {
            $($slider).find('>:first-child').css({'margin-left': $slide.width()});
        };

        // $('.slide-direction').css({'top': $slide.height()/2});
        $('#next').css({'right': parseInt($container.css('margin-right'))+15 });
        $('#image-slider a img').css({
        	'display': 'block',
        	'margin': '0 auto'
        });
    }

    function nextSlide() {
        if ($sliderMove > -($slider.width()/2-$slide.width())) {
            $sliderMove-=$container.width();
        } else {
            $sliderMove = 0;
        };
        $slider.css({'margin-left': $sliderMove});
    }

    function prevSlide() {
        if ($sliderMove < 0) {
            $sliderMove+=$container.width();
        };
        $slider.css({'margin-left': $sliderMove});
    }

    if ($totalSlides > 1) {

        $slider.before('<p id="prev" class="slide-direction"><</p>');
        $slider.after('<p id="next" class="slide-direction">></p>');

        $('#next').click(nextSlide);
        $('#prev').click(prevSlide);

        setSlide();
        var w = $(window).width();
        $(window).resize(function(e) {
            if ($(this).width() <= w-50 || $(this).width() >= w+50) {
                setSlide();
            };
            
        });

    }; // end if

}); // end ready