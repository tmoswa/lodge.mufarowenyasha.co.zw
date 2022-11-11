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



            <div class="inner-banner-wrap" style="background-image:url('{{URL::to('wp-content/uploads/2020/royal/DCS 11119.jpg')}}')">
            <div class="container">
                <div class="row">
                    <div class="inner-banner-content">
                        <h2>Choose to View and Book</h2>                        <div class="header-breadcrumb">
                            <ul class="breadcrumb"><li><a href="{url('/')}}">Home</a></li> <li><a href="{{url('/rooms')}}">Room</a></li> </ul>                        </div>
                    </div>
                </div>
            </div>
        </div>
        ')}}'
</header>



	
<div class="section-content section">
    <div class="container">
        <div class="row">
            
            @if(session('success'))

            <div class="alert alert-success">
            
              {{ session('success') }}
            
            </div>
            @endif
                
                
<ul class="rooms tp-hotel-booking hb-catalog-column-4">
                
                
                    
<li id="room-165" class="post-165 hb_room type-hb_room status-publish has-post-thumbnail hentry hb_room_type-deluxed">


<div class="summary entry-summary">

    
<div class="media">
<a href="{{route('book','royalsuite')}}"><img src="{{URL::to('wp-content/uploads/2020/royal/1.jpg')}}" width="270" height="270" alt=""/></a>
</div>
<div class="title">
<h4>
    <a href="{{route('book','royalsuite')}}">Royal Suite</a>
</h4>
</div>

<a href="{{route('book','royalsuite')}}">
<div class="price">
    <span class="title-price">Price</span>

                <span class="price_value price_min">&#36;80.00</span>
    
    <span class="unit">12.00HRS-10.00HRS</span>
</div>
</a>
<div class="rating">
    <div itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating" class="star-rating"
    title="Rated 5 out of 5">
   <span style="width:100%"></span>
</div>
        </div>

</div><!-- .summary -->


</li>


                
                    
<li id="room-163" class="post-163 hb_room type-hb_room status-publish has-post-thumbnail hentry hb_room_type-simple">


<div class="summary entry-summary">

    
<div class="media">
<a href="{{route('book','honeymoonsuite')}}"><img src="{{URL::to('wp-content/uploads/2020/honeymoon/DCS 11061.jpg')}}" width="270" height="270" alt=""/></a>
</div>
<div class="title">
<h4>
    <a href="{{route('book','honeymoonsuite')}}">Honey Moon Suite</a>
</h4>
</div>

<a href="{{route('book','honeymoonsuite')}}">
<div class="price">
    <span class="title-price">Price</span>

                <span class="price_value price_min">&#36;80.00</span>
    
    <span class="unit">12.00HRS-10.00HRS</span>
</div>
</a>
<div class="rating">
    <div itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating" class="star-rating"
    title="Rated 5 out of 5">
   <span style="width:100%"></span>
</div>
        </div>

</div><!-- .summary -->


</li>


                
                    
<li id="room-161" class="post-161 hb_room type-hb_room status-publish has-post-thumbnail hentry hb_room_type-deluxed hb_room_type-simple">


<div class="summary entry-summary">

    
<div class="media">
<a href="{{route('book','familysuite')}}"><img src="{{URL::to('wp-content/uploads/2020/family/DCS 11133.jpg')}}" width="270" height="270" alt=""/></a>
</div>
<div class="title">
<h4>
    <a href="{{route('book','familysuite')}}">Family Suite</a>
</h4>
</div>

<a href="{{route('book','familysuite')}}">
<div class="price">
    <span class="title-price">Price</span>

                <span class="price_value price_min">&#36;70.00</span>
    
    <span class="unit">12.00HRS-10.00HRS</span>
</div>
</a>



<div class="rating">
    <div itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating" class="star-rating"
    title="Rated 5 out of 5">
   <span style="width:100%"></span>
</div>
        </div>

</div><!-- .summary -->


</li>


                
                    
<li id="room-114" class="post-114 hb_room type-hb_room status-publish has-post-thumbnail hentry hb_room_type-simple">


<div class="summary entry-summary">

    
<div class="media">
    <a href="{{route('book','deluxesuite')}}"><img src="{{URL::to('wp-content/uploads/2020/deluxe/DCS 11105.jpg')}}" width="270" height="270" alt=""/></a>
</div>
<div class="title">
<h4>
    <a href="{{route('book','deluxesuite')}}">Deluxe Suite</a>
</h4>
</div>

<a href="{{route('book','deluxesuite')}}">
<div class="price">
    <span class="title-price">Price</span>

                <span class="price_value price_min">&#36;55.00</span>
    
    <span class="unit">12.00HRS-10.00HRS</span>
</div>
</a>

<div class="rating">
                <div itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating" class="star-rating"
             title="Rated 5 out of 5">
            <span style="width:100%"></span>
        </div>
        </div>

</div><!-- .summary -->


</li>


                
                    
<li id="room-112" class="post-112 hb_room type-hb_room status-publish has-post-thumbnail hentry hb_room_type-deluxed">


<div class="summary entry-summary">

    
<div class="media">
    <a href="{{route('book','standardsuite')}}"><img src="{{URL::to('wp-content/uploads/2020/standard/DCS 11291.jpg')}}" width="270" height="270" alt=""/></a>
</div>
<div class="title">
<h4>
    <a href="{{route('book','standardsuite')}}">Standard Suite</a>
</h4>
</div>

<a href="{{route('book','standardsuite')}}">
<div class="price">
    <span class="title-price">Price</span>

                <span class="price_value price_min">&#36;45.00</span>
    
    <span class="unit">12.00HRS-10.00HRS</span>
</div>
</a>

<div class="rating">
    <div itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating" class="star-rating"
    title="Rated 5 out of 5">
   <span style="width:100%"></span>
</div>
        </div>

</div><!-- .summary -->


</li>


                
                    
<li id="room-107" class="post-107 hb_room type-hb_room status-publish has-post-thumbnail hentry hb_room_type-deluxed">


<div class="summary entry-summary">

    
<div class="media">
    <a href="{{route('book','budgetsuite')}}"><img src="{{URL::to('wp-content/uploads/2020/budget/DCS 11281.jpg')}}" width="270" height="270" alt=""/></a>
</div>
<div class="title">
<h4>
    <a href="{{route('book','budgetsuite')}}">Budget Suite</a>
</h4>
</div>

<a href="{{route('book','budgetsuite')}}">
<div class="price">
    <span class="title-price">Price</span>

                <span class="price_value price_min">&#36;35.00</span>
    
    <span class="unit">12.00HRS-10.00HRS</span>
</div>
</a>

<div class="rating">
    <div itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating" class="star-rating"
    title="Rated 4 out of 5">
   <span style="width:80%"></span>
</div>
        </div>

</div><!-- .summary -->


</li>


                
                
</ul>


                
            
            
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
    </div>
</div>



@endsection