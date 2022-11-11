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
                        <h2>Finish Booking {{$current_room->name}}</h2>                        <div class="header-breadcrumb">
                            <ul class="breadcrumb"><li><a href="{url('/')}}">Home</a></li> <li><a href="{{url('/rooms')}}">Rooms</a></li>  <li>{{$current_room->name}}</li></ul>                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</header>



	
<div class="section-content section">
    <div class="container">
        <div class="row">
            
            <div id="secondary">
                <section id="hb_widget_cart-1" class="widget widget_hb_widget_cart">   
                         <div id="hotel_booking_mini_cart_5f37d704bcf4d" class="hotel_booking_mini_cart">
    
        <p class="hb_mini_cart_empty">Fill in your details below and Finish.</p>
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
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form  action="{{route('finishbooking')}}" method="POST" >
    @csrf
    <table width="100%">
        <tr>
            <td>    
                <label>Arrival Date</label> 
                <div class="hb-form-field-input"> 
                    <input type="text" name="checkin_date" id="" class="form-control" value="{{$enquiry_details->checkin_date}}" readonly /></div> </td>
            <td>    <label>Departure Date</label> <div class="hb-form-field-input "> <input type="text" name="checkout_date" id="" class="form-control" value="{{$enquiry_details->checkout_date}}"  readonly/></div> </td>
            <td>    <label>Adults</label> <div class="hb-form-field-input "> <input type="text" name="adults" id="" class="form-control" value="{{$enquiry_details->adults}}" readonly /></div> </td>
            
        </tr>
        <tr>
            <td>    <label>Children</label> <div class="hb-form-field-input "> <input type="text" name="children" id="" class="form-control" value="{{$enquiry_details->children}}" readonly /></div> </td>
            <td>    <label>Total Amount ({{$days}} days)</label> <div class="hb-form-field-input "> <input type="text" name="amount" id="" class="form-control" value="{{$current_room->price*$days}}" readonly /></div> </td>
            <td>    <label>Name</label> <div class="hb-form-field-input "> <input type="text" name="name" id="" class="form-control" value="" placeholder="Name" required /></div> </td>
            
        </tr>
        <tr>
            
            <td>    <label>Phone Number</label> <div class="hb-form-field-input "> <input type="text" name="phone" id="" class="form-control" value="" placeholder="Phone" required /></div> </td>
            <td>    <label>Email</label> <div class="hb-form-field-input "> <input type="email" name="email" id="" class="form-control" value="" placeholder="Email" required /></div> </td>
            <input type="hidden" id="nonce" name="room_name" value="{{$current_room->name}}" />
            <td> </br><input type="submit" style="font-size:16px; color:black; background-color:green" class="btn btn-primary" value="Finish"/></td>
            
        </tr>
    </table>

    
    
    </form>
            </div>
</section>                 </div>

            
            
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