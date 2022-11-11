(function( $ ) {
	'use strict';

	/**
	 * All of the code for your public-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */

    $(".hp-book-room-section").on('click', function (event) {
		event.preventDefault();
        var formData = $(this).attr('data-id');
        $.ajax({
            type: 'POST',
            dataType: "json",
            url: hotel_pagoda_base_camp_ajax_function.ajaxurl,
            data: {
                'action': 'hotel_pagoda_base_camp_book_action',
                'formdata': formData
            },
            beforeSend: function () {
                // $('.success').remove();
                // $('.error').remove();
            },
            success: function (data) {
            	var content,post_title;
            	content = data[0].post_content;
            	post_title = data[0].post_title;
            	$('.modal-title').html(post_title);
            	$('#content1').html(content);
                if (data.success) {
                    // $('#mail-status').prepend('<p class="success">' + data.success + '</p>');
                }
                else {
                    // $('#mail-status').prepend('<p class="error">' + data.failed + '</p>');
                }

            },
        });


	});
    $("#contact_form").on('submit', function (event) {
        event.preventDefault();
        var formData = $(this).serialize();
        $.ajax({
            type: 'POST',
            dataType: "json",
            url: hotel_pagoda_base_camp_ajax_function.ajaxurl,
            data: {
                'action': 'hotel_pagoda_base_camp_quick_action',
                'formdata': formData
            },
            beforeSend: function () {
                $('.success').remove();
                $('.error').remove();
            },
            success: function (data) {
                if (data.success) {
                    $('#mail-status').prepend('<p class="success">' + data.success + '</p>');
                }
                else {
                    $('#mail-status').prepend('<p class="error">' + data.failed + '</p>');
                }

            },
        });
    });

})(jQuery);