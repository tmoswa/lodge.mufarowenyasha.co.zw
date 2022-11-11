(function($) {

    var test = hotel_pagoda_ajax_function.hp_block_date;

    // Menu dropdown on hover
    extendNav();
    function extendNav() {
        $('.nav-wrapper .navbar-collapse .dropdown').on({
            mouseenter: function () {
                jQuery(this).children('.dropdown-menu').stop(true, true).show().addClass('animated-fast slfadeInDown');
                jQuery(this).toggleClass('open');
            },
            mouseleave: function () {
                jQuery(this).children('.dropdown-menu').stop(true, true).hide().removeClass('animated-fast slfadeInDown');
                jQuery(this).toggleClass('open');
            }
        });
    }
    $('.slider-item-wrapper').slick({
        dots: false,
        infinite: true,
        speed: 800,
        fade: true,
        autoplay: true,
        pauseOnHover: false,
        arrows: false,
    });

    $('.about-slider').slick({
        dots: false,
        infinite: true,
        speed: 500,
        autoplay: true,
        arrows: false,
        centerMode: true,
        centerPadding: '60px',
        slidesToShow: 2,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 990,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    $('.hp-accomodation-wrap').slick({
        dots: false,
        infinite: true,
        speed: 500,
        autoplay: true,
        arrows: false,
        centerMode: true,
        centerPadding: '250px',
        slidesToShow: 1,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 989,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    centerMode: false,
                    centerPadding: '0',
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    centerMode: false,
                    centerPadding: '0',
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    centerMode: false,
                    centerPadding: '0',
                }
            }
        ]
    });

$('.features-slider').slick({
  dots: false,
  infinite: true,
  speed: 2000,
  autoplay: true,
  arrows: false,
  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [
      {
        breakpoint: 990,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: true,
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
  ]
});


    // $('.amentitles-cat-block').slick({
    //     dots: false,
    //     infinite: true,
    //     speed: 500,
    //     autoplay: true,
    //     arrows: false,
    //     slidesToShow: 4,
    //     slidesToScroll: 1,
    //     responsive: [
    //         {
    //             breakpoint: 990,
    //             settings: {
    //                 slidesToShow: 4,
    //                 slidesToScroll: 1,
    //                 infinite: true,
    //             }
    //         },
    //         {
    //             breakpoint: 768,
    //             settings: {
    //                 slidesToShow: 3,
    //                 slidesToScroll: 1
    //             }
    //         },
    //         {
    //             breakpoint: 600,
    //             settings: {
    //                 slidesToShow: 2,
    //                 slidesToScroll: 1
    //             }
    //         },
    //         {
    //             breakpoint: 480,
    //             settings: {
    //                 slidesToShow: 1,
    //                 slidesToScroll: 1
    //             }
    //         }
    //     ]
    // });

    jQuery( document ).ajaxComplete(function() {
        if(jQuery('#hotel_booking_room_hidden .hotel_booking_room_errors').length>0){
//            jQuery('#hotel_booking_room_hidden .hasDatepicker').datepicker('setDate', null);
            jQuery('#hotel_booking_room_hidden .hasDatepicker').datepicker( "option" , {
                minDate: new Date(),
                maxDate: null} );
        }

    });


    //gallery
    $('.post-format-gallery').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        speed: 500,
        autoplay: true,
        arrows: true
    });


    $('.room-detail-slider').slick({
        dots: false,
        infinite: true,
        speed: 500,
        autoplay: true,
        arrows: false,
        asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.room-detail-slider',
        dots: false,
        autoplay: true,
        centerMode: true,
        focusOnSelect: true,
        arrows: false,
        responsive: [
            {
                breakpoint: 989,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    infinite: true,
                    centerMode: false,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    centerMode: false,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    centerMode: false,
                }
            }
        ]
    });

    $('.sidebar-page .related-posts').slick({
        infinite: true,
        autoplaySpeed: 7000,
        arrows: false,
        slidesToShow: 2,
        autoplay: true,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 990,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }
        ]
    });

    $('.no-sidebar .related-posts').slick({
        infinite: true,
        autoplaySpeed: 7000,
        arrows: false,
        slidesToShow: 3,
        autoplay: true,
        slidesToScroll: 2,
        responsive: [
            {
                breakpoint: 990,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 2,
                    infinite: true,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }
        ]
    });

    $('.related-posts .post-gallery').slick({
        dots: false,
        infinite: true,
        speed: 500,
        autoplay: true,
        arrows: false,
    });

    $(function () {
        // $('#datetimepicker1,#datetimepicker2,#datetimepicker3,#datetimepicker4').datetimepicker({format: 'DD/MMMM/YYYY'});
    });

    $('#hp-send-enquiry').on('click',function(e){
       var checkIn,checkOut,rooms;
       checkIn = $('#datetimepicker3').attr('value');
        checkOut = $('#datetimepicker4').attr('value');
        rooms = $('#hp-select-room option selected').attr('data-value');
        $('#datetimepicker1 input').attr('value',checkIn);
        $('#datetimepicker2 input').attr('value',checkOut);
        $('#hp-modal-form option').attr('value',rooms);
        // $('#hp-modal-form option').find('data-value').each(function(i,e){
        //     console.log(e);
        // });
    });

    $('#hp-select-room').on('change', function(e) {
        alert(e);
        $('#hp-select-room option').attr("selected","selected");
        var selectHtml = $('#hp-select-room').html();
        $('#hp-modal-form').html(selectHtml);
    });

    $('.testimonial-slider').slick({
        dots: false,
        infinite: true,
        speed: 500,
        autoplay: true,
        arrows: false,
    });


    $('.navbar-nav').onePageNav({
        currentClass: 'current',
        changeHash: false,
        scrollSpeed: 900,
        scrollThreshold: 0.1,
        filter: '',
        navItems: 'a',
        navHeight: 70,
        easing: 'swing',
        begin: function () {
            //I get fired when the animation is starting
        },
        end: function () {
            //I get fired when the animation is ending
        },
        scrollChange: function ($currentListItem) {
            //I get fired when you enter a section and I pass the list item of the section
        }
    });

    $('.nav-wrapper').stickMe({
        transitionDuration: 500,
        shadow: true,
        shadowOpacity: 0.6,
    });



    // $('.theme-footer').footerReveal({shadow: false});

    function responsiveIframe() {
        var videoSelectors = [
            'iframe[src*="player.vimeo.com"]',
            'iframe[src*="youtube.com"]',
            'iframe[src*="youtube-nocookie.com"]',
            'iframe[src*="kickstarter.com"][src*="video.html"]',
            'iframe[src*="screenr.com"]',
            'iframe[src*="blip.tv"]',
            'iframe[src*="dailymotion.com"]',
            'iframe[src*="viddler.com"]',
            'iframe[src*="qik.com"]',
            'iframe[src*="revision3.com"]',
            'iframe[src*="hulu.com"]',
            'iframe[src*="funnyordie.com"]',
            'iframe[src*="flickr.com"]',
            'embed[src*="v.wordpress.com"]',
            'iframe[src*="videopress.com"]',
            'embed[src*="videopress.com"]'
            // add more selectors here
        ];
        var allVideos = videoSelectors.join(',');
        jQuery(allVideos).wrap('<span class="media-holder" />');
    }

    // Responsive Iframes
    responsiveIframe();
    $(".video-popup").YouTubePopUp();


    $('.timer').countTo();

    function initContactMap() {
        var contact_latitude, contact_longitude, contact_link;
        contact_latitude = jQuery("#contact-map-latitude").val();
        contact_longitude = jQuery("#contact-map-longitude").val();
        contact_link = jQuery("#contact-map-link").val();

        var map_center = {"lat": contact_latitude, "lng": contact_longitude};
        var map = new google.maps.Map(document.getElementById('contact-map-wrapper'), {
            zoom: 14,
            zoomControl: false,
            scaleControl: false,
            scrollwheel: false,
            disableDoubleClickZoom: true,
            center: new google.maps.LatLng(contact_latitude, contact_longitude),
        });
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(contact_latitude, contact_longitude),
            map: map,
            url: contact_link,
        });

        google.maps.event.addListener(marker, 'click', function () {
            window.open(marker.url, '_blank');
        });
    }

    var is_template_contact = jQuery("#is_template_home").val();

    if (is_template_contact == 1) {
        initContactMap();
    }
    $(window).load(function(e)
    {
        if($('.section-content').hasClass('hp-book-now')){
            $('#hb_room_load_booking_form').trigger('click');
        }
        $(".bgndVideo").YTPlayer();

        $('.hasDatepicker').attr('autocomplete','off');
    });

})(jQuery);


