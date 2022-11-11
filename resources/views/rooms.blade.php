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



    <div class="inner-banner-wrap" style="background-image:url('{{URL::to($current_room->picture1)}}')">
            <div class="container">
                <div class="row">
                    <div class="inner-banner-content">
                        <h2>{{$current_room->name}}</h2>                        <div class="header-breadcrumb">
                        <ul class="breadcrumb"><li><a href="{{url('/')}}">Home</a></li> <li><a href="{{url('/rooms')}}">Rooms</a></li>  <li>{{$current_room->name}}</li></ul>                        </div>
                    </div>
                </div>
            </div>
        </div>
        
</header>



	
<div class="section-content section sidebar-page">
    <div class="container">
        <div class="row">
                        <div class="col-md-8 pull-left">
                                <div id="room-112" class="hb_single_room post-112 hb_room type-hb_room status-publish has-post-thumbnail hentry hb_room_type-deluxed">

                    
                    <div class="summary entry-summary">

                        

<div class="title">
    <h4>
        <a href="index.html">{{$current_room->name}}</a>
    </h4>
</div>


    <div class="price">
        <span class="title-price">Price</span>

		            <span class="price_value price_min">&#36;{{$current_room->price}}.00</span>
		
        <span class="unit">Room(checkin 12.00 Noon -checkout out 10.00 AM)</span>
    </div>

    <div class="hb_room_gallery camera_wrap camera_emboss" id="camera_wrap_112">

        @if($current_room->picture1!=null)
		            <div data-thumb="{{URL::to($current_room->picture1)}}"
                 data-src="{{URL::to($current_room->picture1)}}"></div>
        @endif

        @if($current_room->picture2!=null)
		            <div data-thumb="{{URL::to($current_room->picture2)}}"
                 data-src="{{URL::to($current_room->picture2)}}"></div>
        @endif

        @if($current_room->picture3!=null)
		            <div data-thumb="{{URL::to($current_room->picture3)}}"
                 data-src="{{URL::to($current_room->picture3)}}"></div>
         @endif

        @if($current_room->picture4!=null)
		            <div data-thumb="{{URL::to($current_room->picture4)}}"
                 data-src="{{URL::to($current_room->picture4)}}"></div>
        @endif

        @if($current_room->picture5!=null)
		            <div data-thumb="{{URL::to($current_room->picture5)}}"
                 data-src="{{URL::to($current_room->picture5)}}"></div>
        @endif

        @if($current_room->picture6!=null)
		            <div data-thumb="{{URL::to($current_room->picture6)}}"
                 data-src="{{URL::to($current_room->picture6)}}"></div>
        @endif

        @if($current_room->picture7!=null)
		            <div data-thumb="{{URL::to($current_room->picture7)}}"
                 data-src="{{URL::to($current_room->picture7)}}"></div>
        @endif

        @if($current_room->picture8!=null)
		            <div data-thumb="{{URL::to($current_room->picture8)}}"
                 data-src="{{URL::to($current_room->picture8)}}"></div>
        @endif

        @if($current_room->picture9!=null)
		            <div data-thumb="{{URL::to($current_room->picture9)}}"
                 data-src="{{URL::to($current_room->picture9)}}"></div>
        @endif
        @if($current_room->picture10!=null)
		            <div data-thumb="{{URL::to($current_room->picture10)}}"
                 data-src="{{URL::to($current_room->picture10)}}"></div>
        @endif
		    </div>
          
    <script type="text/javascript">
        (function ($) {
            "use strict";
            $(document).ready(function () {
                $('#camera_wrap_112').camera({
                    height: '470px',
                    loader: 'none',
                    pagination: false,
                    thumbnails: true
                });
            });
        })(jQuery);
    </script>

<div class="hb_single_room_details" style="padding-top: 30px;">

    <ul class="hb_single_room_tabs">
		            <li>
                <a href="#hb_room_description">
										Description					                </a>
            </li>
		            <li>
                <a href="#hb_room_additinal">
										Additional Information					                </a>
            </li>
		            <li>
                <a href="#hb_room_reviews">
										Reviews					<span class="comment-count">({{$current_count}})</span>                </a>
            </li>
		       
		    </ul>

	
    <div class="hb_single_room_tabs_content">

		            <div id="hb_room_description" class="hb_single_room_tab_details">

				
                    <p style="text-align: justify;">{{$current_room->description}}</p>

				            </div>
		            <div id="hb_room_additinal" class="hb_single_room_tab_details">
                        {{$current_room->additional_information}}
				            </div>
		            <div id="hb_room_reviews" class="hb_single_room_tab_details">

				
<div id="reviews">
    <div id="comments">
        <h2>
			Reviews        </h2>
@foreach($current_review as $cr)
                    <p class="hb-noreviews"><strong>{{$cr->comment}} :</strong>{{$cr->comment}}. </p>
        </br>
        <div class="testimonial-rating">
        <?php 
        $i=0;
        for($i=0; $i<$cr->rating; $i++)
        {
        ?>
         <i class="fa fa-star" aria-hidden="true"></i>
        <?php
        }
?>

     </div>    

        
         

@endforeach
</div>
  

	
    <div class="clear"></div>
</div>

				
				            </div>
		           
		    </div>

</div>

                    </div><!-- .summary -->

                                                        </div>

                        </div>

            
                <div class="col-md-4 sidebar pull-right">

                    <div id="secondary">
                        <section id="hb_widget_cart-1" class="widget widget_hb_widget_cart">   
                                 <div id="hotel_booking_mini_cart_5f37d704bcf4d" class="hotel_booking_mini_cart">
			
                <h3>To Book {{$current_room->name}}</h3>

			
			
                <p class="hb_mini_cart_empty">Fill in your details below and Proceed.</p>
                @if(session('success'))

                <div class="alert alert-success">
                
                  {{ session('success') }}
                
                </div>
                @endif
                @if(session('error'))

<div class="alert alert-danger">

  {{ session('error') }}

</div>
@endif
			        </div>
		</section><section id="hb_widget_search-1" class="widget widget_hb_widget_search">
<div id="hotel-booking-search" class="hotel-booking-search">
	        <h3>Check Availability</h3>
	
<form  action="{{route('room_booking')}}" method="POST" >
        @csrf
        <ul class="hb-form-table">
            <li class="hb-form-field">
				<label>Arrival Date</label>                <div class="hb-form-field-input hb_input_field">
                    <input type="text" name="checkin_date" id="check_in_date_5f37d704bdf12"
                           class="hb_input_date_check" value="" 
                           placeholder="Arrival Date"/>
                </div>
            </li>

            <li class="hb-form-field">
				<label>Departure Date</label>                <div class="hb-form-field-input hb_input_field">
                    <input type="text" name="checkout_date" id="check_out_date_5f37d704bdf12"
                           class="hb_input_date_check" value="" 
                           placeholder="Departure Date"/>
                </div>
            </li>

            <li class="hb-form-field">
				<label>Adults</label>                <div class="hb-form-field-input">
					<select name="adults">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                    </select>                </div>
            </li>

            <li class="hb-form-field">
				<label>Children</label>                <div class="hb-form-field-input">
					<select name="children" >
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    
                    </select>                </div>
            </li>
        </ul>
    </br>
        <input type="hidden" id="nonce" name="room_name" value="{{$current_room->name}}" />
        
            <input type="submit" style="font-size:16px; color:black; background-color:orange" class="btn btn-primary" value="Proceed"/>
        </li>
    
    </form>


</div>
</section>

                  </div>

                </div>
                    </div>
  
    <div class="row" style="border: 0px solid #fff; " >
        <div class="col-8" style="border: 0px solid #fff;">
    <div id="" style="border: 0px solid #fff;" >
        <div id="" style="border: 0px solid #fff;">
                <div id="respond" class="" style="border: 0px solid #fff;">
    <h3 id="reply-title" class="comment-reply-title">Enter Information below to review &ldquo;{{$current_room->name}}&rdquo; <small><a rel="nofollow" id="cancel-comment-reply-link" href="index.html#respond" style="display:none;">Cancel reply</a></small></h3>
    
    <form action="{{route('review_post')}}" method="POST">
        @csrf
        <table style="60%" style="border: 0px solid #fff;">
            <tr> <td>
        <p class="comment-form-rating"><label for="rating" style="text-align: left">Your Rating</label></p>
        <div class="hb-rating-input" name="rating"></div></td>
        <td><p class="comment-form-comment"><label for="comment">Your Review</label>
        <input type="hidden" name="room_name" value="{{$current_room->name}}"/>
            <textarea id="comment" name="comment" cols="30" rows="2" aria-required="true"></textarea></p>
        </td><td>
            <p class="comment-form-author"><label for="author">Name <span class="required">*</span></label> 
                <input id="author" name="name" required type="text" value="" size="30" aria-required="true" /></p>
    <p class="comment-form-email"><label for="email">Email <span class="required">*</span></label> 
        <input id="email" name="email" required type="text" value="" size="30" aria-required="true" /></p>
        <p class="comment-form-cookies-consent">
        <input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" required value="yes" />
         <label for="wp-comment-cookies-consent">Save my data, and publish on this website reviews.</label></p>
       <p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Submit" /> 
        <input type='hidden' name='comment_post_ID' value='112' id='comment_post_ID' />
    <input type='hidden' name='comment_parent' id='comment_parent' value='0' />
    </p></td>
    
        
    </tr></table></form>	</div><!-- #respond -->
            </div>
    </div>

</div>
</div><!-- #product-112 -->

<div class="container">
    <div class="row">
    <div class="hb_related_other_room has_slider">
        <h3 class="title">Other Suites</h3>
				
<ul class="rooms tp-hotel-booking hb-catalog-column-4" style="100%">
		
			
<li id="room-165" class="post-165 hb_room type-hb_room status-publish has-post-thumbnail hentry hb_room_type-deluxed">

	
    <div class="summary entry-summary">

		
<div class="media">
    <a href="{{route('book','honeymoonsuite')}}"><img src="{{URL::to('wp-content/uploads/2020/honeymoon/DCS 11061.jpg')}}" width="270" height="270" alt=""/></a>
</div>
<div class="title">
    <h4>
        <a href="{{route('book','honeymoonsuite')}}">Honey Moon Suite</a>
    </h4>
</div>


    <div class="price">
        <span class="title-price">Price</span>

		            <span class="price_value price_min">&#36;80.00</span>
		
        <span class="unit">12.00HRS-10.00HRS</span>
    </div>

    <div class="rating">
		    </div>

    </div><!-- .summary -->

	
</li>


<li id="room-1659" class="post-165 hb_room type-hb_room status-publish has-post-thumbnail hentry hb_room_type-deluxed">

	
    <div class="summary entry-summary">

		
<div class="media">
    <a href="{{route('book','royalsuite')}}"><img src="{{URL::to('wp-content/uploads/2020/royal/1.jpg')}}" width="270" height="270" alt=""/></a>
</div>
<div class="title">
    <h4>
        <a href="{{route('book','royalsuite')}}">Royal Suite</a>
    </h4>
</div>


    <div class="price">
        <span class="title-price">Price</span>

		            <span class="price_value price_min">&#36;80.00</span>
		
        <span class="unit">12.00HRS-10.00HRS</span>
    </div>

    <div class="rating">
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


    <div class="price">
        <span class="title-price">Price</span>

		            <span class="price_value price_min">&#36;70.00</span>
		
        <span class="unit">12.00HRS-10.00HRS</span>
    </div>

    <div class="rating">
		    </div>

    </div><!-- .summary -->

	
</li>


</ul>
<ul class="rooms tp-hotel-booking hb-catalog-column-4" style="100%">
			
<li id="room-107" class="post-107 hb_room type-hb_room status-publish has-post-thumbnail hentry hb_room_type-deluxed">

	
    <div class="summary entry-summary">

		
<div class="media">
    <a href="{{route('book','deluxesuite')}}"><img src="{{URL::to('wp-content/uploads/2020/deluxe/DCS 11105.jpg')}}" width="270" height="270" alt=""/></a>
</div>
<div class="title">
    <h4>
        <a href="{{route('book','deluxesuite')}}">Deluxe Room</a>
    </h4>
</div>


    <div class="price">
        <span class="title-price">Price</span>

		            <span class="price_value price_min">&#36;55.00</span>
		
        <span class="unit">12.00HRS-10.00HRS</span>
    </div>

    <div class="rating">
		    </div>

    </div><!-- .summary -->

	
</li>

<li id="room-1070" class="post-107 hb_room type-hb_room status-publish has-post-thumbnail hentry hb_room_type-deluxed">

	
    <div class="summary entry-summary">

		
<div class="media">
    <a href="{{route('book','standardsuite')}}"><img src="{{URL::to('wp-content/uploads/2020/standard/DCS 11291.jpg')}}" width="270" height="270" alt=""/></a>
</div>
<div class="title">
    <h4>
        <a href="{{route('book','standardsuite')}}">Standard Room</a>
    </h4>
</div>


    <div class="price">
        <span class="title-price">Price</span>

		            <span class="price_value price_min">&#36;45.00</span>
		
        <span class="unit">12.00HRS-10.00HRS</span>
    </div>

    <div class="rating">
		    </div>

    </div><!-- .summary -->

	
</li>

<li id="room-1071" class="post-107 hb_room type-hb_room status-publish has-post-thumbnail hentry hb_room_type-deluxed">

	
    <div class="summary entry-summary">

		
<div class="media">
    <a href="{{route('book','budgetsuite')}}"><img src="{{URL::to('wp-content/uploads/2020/budget/DCS 11281.jpg')}}" width="270" height="270" alt=""/></a>
</div>
<div class="title">
    <h4>
        <a href="{{route('book','budgetsuite')}}">Budget Room</a>
    </h4>
</div>


    <div class="price">
        <span class="title-price">Price</span>

		            <span class="price_value price_min">&#36;35.00</span>
		
        <span class="unit">12.00HRS-10.00HRS</span>
    </div>

    <div class="rating">
		    </div>

    </div><!-- .summary -->

	
</li>
		
		
</ul>

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