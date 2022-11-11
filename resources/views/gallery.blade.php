@extends('layouts.main_header')

@section('content')

		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>

		</head>



            <div class="inner-banner-wrap" style="background-image:url('{{URL::to('wp-content/uploads/2020/gallery/DCS 11084.jpg')}}')">
            <div class="container">
                <div class="row">
                    <div class="inner-banner-content">
                        <h2>Gallery</h2>                        <div class="header-breadcrumb">
                            <ul class="breadcrumb"><li><a href="{url('/')}}">Home</a></li> <li><a href="{{route('gallery')}}">Gallery</a></li> </ul>                        </div>
                    </div>
                </div>
            </div>
        </div>
        ')}}'
</header>



	
<div class="section-content section">
    <div class="container-fluid w100">
        <div class="row" style="text-align: center;">
           
            <img src="{{URL::to('wp-content/uploads/2020/gallery/DCS 11081.jpg')}}" width="40%">
            
            <img src="{{URL::to('wp-content/uploads/2020/gallery/DCS 11089.jpg')}}" width="40%">
        </div>
    </br>
        <div class="row" style="text-align: center;">
            <img src="{{URL::to('wp-content/uploads/2020/gallery/DCS 11084.jpg')}}" width="40%">
            
            <img src="{{URL::to('wp-content/uploads/2020/gallery/DCS 11085.jpg')}}" width="40%">
        
                        </div>
                    </br>
                        <div class="row" style="text-align: center;">
                            <img src="{{URL::to('wp-content/uploads/2020/gallery/DCS 11090.jpg')}}" width="40%">
                            
                            <img src="{{URL::to('wp-content/uploads/2020/gallery/DCS 11077.jpg')}}" width="40%">
                        
                         </div>

                        </br>
                        <div class="row" style="text-align: center;">
                            <img src="{{URL::to('wp-content/uploads/2020/gallery/DCS 11062.jpg')}}" width="40%">
                            
                            <img src="{{URL::to('wp-content/uploads/2020/gallery/DCS 11063.jpg')}}" width="40%">
                        
                         </div>

                        </br>
                        <div class="row" style="text-align: center;">
                            <img src="{{URL::to('wp-content/uploads/2020/gallery/DCS 11064.jpg')}}" width="40%">
                            
                            <img src="{{URL::to('wp-content/uploads/2020/gallery/DCS 11065.jpg')}}" width="40%">
                        
                         </div>
                        </br>
                        <div class="row" style="text-align: center;">
                            <img src="{{URL::to('wp-content/uploads/2020/gallery/DCS 11067.jpg')}}" width="40%">
                            
                            <img src="{{URL::to('wp-content/uploads/2020/gallery/DCS 11068.jpg')}}" width="40%">
                        
                         </div>

                        </br>
                        <div class="row" style="text-align: center;">
                            <img src="{{URL::to('wp-content/uploads/2020/gallery/DCS 11074.jpg')}}" width="40%">
                            
                            <img src="{{URL::to('wp-content/uploads/2020/gallery/DCS 11075.jpg')}}" width="40%">
                        
                         </div>

                        </br>
                        <div class="row" style="text-align: center;">
                            <img src="{{URL::to('wp-content/uploads/2020/gallery/DCS 11086.jpg')}}" width="40%">
                            
                            <img src="{{URL::to('wp-content/uploads/2020/gallery/DCS 11087.jpg')}}" width="40%">
                        
                         </div>

                        </br>
                        <div class="row" style="text-align: center;">
                            <img src="{{URL::to('wp-content/uploads/2020/gallery/DCS 11088.jpg')}}" width="40%">
                            
                            <img src="{{URL::to('wp-content/uploads/2020/gallery/DCS 11092.jpg')}}" width="40%">
                        
                         </div>

                        </br>
                        <div class="row" style="text-align: center;">
                            <img src="{{URL::to('wp-content/uploads/2020/gallery/DCS 11115.jpg')}}" width="40%">
                            
                            <img src="{{URL::to('wp-content/uploads/2020/gallery/DCS 11118.jpg')}}" width="40%">
                        
                         </div>
    </div>
</div>
    <script type="text/javascript">
		(function ($) {
			"use strict";
			$(document).ready(function () {
				var thimpress_hotel_booking_carousel_related = $('.hb_related_other_room .rooms');
				thimpress_hotel_booking_carousel_related.owlCarousel({
					navigation     : false,
					pagination     : false,
					items          : 3,
					paginationSpeed: 600,
					slideSpeed     : 600,
					autoPlay       : true,
					stopOnHover    : true
				});
				// next
				$('.hb_related_other_room .navigation .next').click(function () {
					thimpress_hotel_booking_carousel_related.trigger('owl.next');
				});
				// prev
				$('.hb_related_other_room .navigation .prev').click(function () {
					thimpress_hotel_booking_carousel_related.trigger('owl.prev');
				});
			});
		})(jQuery);
    </script>
 


@endsection