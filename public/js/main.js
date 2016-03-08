/*
	Future Imperfect by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
*/

$(document).ready(function(){
    
    $.ajaxSetup({
       headers:  {'X-CSRF-TOKEN': $('[name="_token"]').val()}
    });

//    console.log($('time').html());
    
    var momentDate = moment($('time').html());
        
    $('time').html(momentDate.format("MMM Do YYYY"))
    
    $('.send').click(function () {        
        $('form').submit(function (e) {
            e.preventDefault();
            var formdata = $(this).serialize();  
            formdata['_token'] = $('input[name=_token]').val();
            $.ajax({
                url: '../comments',
                type: "POST",
                data: formdata,
                success: function (response) {
                    var user_id = response.user_id;
                    var post_id = response.post_id;
                    var content = response.content;
                    var firstname = response.firstname;
                    var lastname = response.lastname;
                    var created_at = response.created_at;
                    
                    var newHtml = '<div class="comments"><h3>'+firstname+' '+lastname+'</h3><p>'+content+'</p><span class="diffForHumans">'+created_at+'</span></div>';
                    
                    $('.comments').parent().append(newHtml);
                }
            });
            
            $(this).find('textarea').val('');
        });
    });
    
    $('.delete').click(function () {        
        $('form').submit(function (e) {
            e.preventDefault();
            var formdata = $(this).serialize();  
            formdata['_token'] = $('input[name=_token]').val();
            $.ajax({
                url: '../comments',
                type: "POST",
                data: formdata,
                success: function (response) {
                    
                    var newHtml = '<div class="comments"><h3>'+firstname+' '+lastname+'</h3><p>'+content+'</p><span class="diffForHumans">'+created_at+'</span></div>';
                    
                    $('.comments').parent().append(newHtml);
                }
            });
            //remove div
        });
    });
    

    if($('.pagination').find("li").first().find('a').attr('href')){
        $('.pagination-not-laravel').find('li').find('a').removeClass('disabled');
        var linkPrev =  $('.pagination').find("li").siblings().first().find('a').attr('href');      
        $('.pagination-not-laravel').find('li').find('a').attr('href', linkPrev);
    }
    if($('.pagination').find("li").siblings().last().find('a').attr('href') == undefined){
         $('.pagination-not-laravel').find('li').last().find('a').addClass('disabled');
    }
    var linkNext = $('.pagination').find("li").siblings().last().find('a').attr('href');
    $('.pagination-not-laravel li').first().next().find('a').attr('href', linkNext);
    
});

(function($) {
    
    

	skel.breakpoints({
		xlarge:	'(max-width: 1680px)',
		large:	'(max-width: 1280px)',
		medium:	'(max-width: 980px)',
		small:	'(max-width: 736px)',
		xsmall:	'(max-width: 480px)'
	});

	$(function() {

		var	$window = $(window),
			$body = $('body'),
			$menu = $('#menu'),
			$sidebar = $('#sidebar'),
			$main = $('#main');

		// Disable animations/transitions until the page has loaded.
			$body.addClass('is-loading');

			$window.on('load', function() {
				window.setTimeout(function() {
					$body.removeClass('is-loading');
				}, 100);
			});

		// Fix: Placeholder polyfill.
			$('form').placeholder();

		// Prioritize "important" elements on medium.
			skel.on('+medium -medium', function() {
				$.prioritize(
					'.important\\28 medium\\29',
					skel.breakpoint('medium').active
				);
			});

		// IE<=9: Reverse order of main and sidebar.
			if (skel.vars.IEVersion <= 9)
				$main.insertAfter($sidebar);

		// Menu.
			$menu
				.appendTo($body)
				.panel({
					delay: 500,
					hideOnClick: true,
					hideOnSwipe: true,
					resetScroll: true,
					resetForms: true,
					side: 'right',
					target: $body,
					visibleClass: 'is-menu-visible'
				});

		// Search (header).
			var $search = $('#search'),
				$search_input = $search.find('input');

			$body
				.on('click', '[href="#search"]', function(event) {

					event.preventDefault();

					// Not visible?
						if (!$search.hasClass('visible')) {

							// Reset form.
								$search[0].reset();

							// Show.
								$search.addClass('visible');

							// Focus input.
								$search_input.focus();

						}

				});

			$search_input
				.on('keydown', function(event) {

					if (event.keyCode == 27)
						$search_input.blur();

				})
				.on('blur', function() {
					window.setTimeout(function() {
						$search.removeClass('visible');
					}, 100);
				});

		// Intro.
			var $intro = $('#intro');

			// Move to main on <=large, back to sidebar on >large.
				skel
					.on('+large', function() {
						$intro.prependTo($main);
					})
					.on('-large', function() {
						$intro.prependTo($sidebar);
					});

	});

})(jQuery);