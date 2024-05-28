@extends('layouts.main')

@section('content')


                    <div class="hp-banner-wrapper" id="#about">
                    <div class="slider-item-wrapper">




                                                                <div class="slider-item slider" style='background-image:url("{{URL::to("wp-content/uploads/2020/slides/1.jpg")}}")'>
                            <div class="banner-text-wrap">
                            <h2>Welcome to Mufaro Wenyasha</h2>
                            <p>Stylish and contemporary morden hospitality on the mountain</p>

                                                                    <div class="btn-wrap">
                                        <a href="#accomodation"
                                           class="button"><span>Explore More</span></a>
                                    </div>
                                                            </div>
                        </div>
                                                                <div class="slider-item slider" style='background-image:url("{{URL::to("wp-content/uploads/2020/slides/7.jpg")}}")'>
                            <div class="banner-text-wrap">
                            <h2>Indulge in Luxury Stay</h2>
                            <p>Savor the best of Midlands hospitality</p>
                                                                    <div class="btn-wrap">
                                        <a href="#accomodation"
                                           class="button"><span>Explore More</span></a>
                                    </div>
                                                            </div>
                        </div>

                        <div class="slider-item slider" style='background-image:url("{{URL::to("wp-content/uploads/2020/gallery/DCS 11084.jpg")}}")'>
                            <div class="banner-text-wrap">
                                <h2>Indulge in Luxury Stay</h2>
                                <p>Savor the best of Midlands hospitality</p>
                                <div class="btn-wrap">
                                    <a href="#accomodation"
                                       class="button"><span>Explore More</span></a>
                                </div>
                            </div>
                        </div>






                                    </div>
                </div>



</header>
    <div class="booking-form-wrap" style="padding-top:70px;">
        <div class="container">
            <div class="row" >

                <div id="hotel-booking-search-5f37d6fc22be9" class="hotel-booking-search">
                    <form  action="{{route('availability')}}" method="POST" >
                        @csrf
                        <ul class="hb-form-table">
                            <li class="hb-form-field">
                                                               <div class="hb-form-field-input ">
                                    <input type="text" name="checkin_date" id="check_in_date_5f37d6fc22be5" class="hb_input_date_check" value="" placeholder="Arrival Date" />
                                </div>
                            </li>

                            <li class="hb-form-field">
                                                              <div class="hb-form-field-input ">
                                    <input type="text" name="checkout_date" id="check_out_date_5f37d6fc22be5" class="hb_input_date_check" value="" placeholder="Departure Date" />
                                </div>
                            </li>

                            <li class="hb-form-field">
                                                           <div class="hb-form-field-input">
                                    <select name="adults" required>
                                        <option value="">Adults</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        </select>                                </div>
                            </li>

                            <li class="hb-form-field">
                                                         <div class="hb-form-field-input">
                                    <select name="children" required>
                                        <option value="">Children</option>
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>

                                        </select>                                </div>
                            </li>
                        </ul>

                        <p class="hb-submit">
                            <button type="submit">Check Availability</button>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>


        <section id="about" class="hp-section section-about">
            </br>
            <div class="container">
                <div class="row">
                                            <div class="col-md-6">
                            <div class="about-wrap">
                                <div class="section-title">
                                    <h2 style="text-align:center;"><a href="">Welcome to Mufaro Wenyasha</a></h2>
                                    <p style="text-align:center;">“hospitality on the mountain”</p>                                </div>
                                <p style="text-align:justify;">Is one of the very few “must visit” lodges in Gweru with the design and finish of the rooms done to exacting standards. Pitched on a hilltop in the leafy Kopje Area which is Gweru’s most exclusive suburb just three and half km from the city center with all the modern amenities the lodge is one of the top billings in Gweru.</p>
                                <p style="text-align:justify;">Visit us and enjoy the comfort, peace and tranquility and the flora and fauna served by a very helpful and friendly staff.</p>
                                <p style="text-align:justify;">What you see is what you get and more. Our prices are deceivingly more than reasonable.Your joy is our delight!</p>
                                <p style="text-align:justify;">We offer the best Accommodation in Gweru.</p>

                                <div class="counter-wrap">
                                        <div class="counter-item">
                                        <span class="timer" data-from="0"
                                              data-to="1" data-speed="2000"
                                              data-refresh-interval="50"></span>
                                                <div class="counter-info">
                                                    <h3>Royal Suite</h3>
                                                </div>
                                            </div>
                                                                                                                            <div class="counter-item">
                                        <span class="timer" data-from="0"
                                              data-to="1" data-speed="2000"
                                              data-refresh-interval="50"></span>
                                                <div class="counter-info">
                                                    <h3>Honey Moon Suite</h3>
                                                </div>
                                            </div>

                                                                                                                         <div class="counter-item">
                                        <span class="timer" data-from="0"
                                              data-to="1" data-speed="2000"
                                              data-refresh-interval="50"></span>
                                                <div class="counter-info">
                                                    <h3>Family Suite</h3>
                                                </div>
                                            </div>

                                            <div class="counter-item">
                                                <span class="timer" data-from="0"
                                                      data-to="4" data-speed="2000"
                                                      data-refresh-interval="50"></span>
                                                        <div class="counter-info">
                                                            <h3>Deluxe Rooms</h3>
                                                        </div>
                                                    </div>
                                                                                                                                    <div class="counter-item">
                                                <span class="timer" data-from="0"
                                                      data-to="2" data-speed="2000"
                                                      data-refresh-interval="50"></span>
                                                        <div class="counter-info">
                                                            <h3>Standard Rooms</h3>
                                                        </div>
                                                    </div>

                                                                                                                                 <div class="counter-item">
                                                <span class="timer" data-from="0"
                                                      data-to="2" data-speed="2000"
                                                      data-refresh-interval="50"></span>
                                                        <div class="counter-info">
                                                            <h3>Budget Rooms</h3>
                                                        </div>
                                                    </div>

                                                                                                                </div>


                            </div>
                        </div>
                        <div class="col-md-6">
                                                            <div class="about-img">
                                    <div class="hp-about-slider">
                                        <div class="about-slider-item">
                                            <iframe width="940" height="529" src="https://www.youtube.com/embed/O7QwKNXPBns" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                                                    </div>
                                        </div>
        </section>



    <section id="accomodation" class="hp-section section-accomodation">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h2>Rooms &amp; Suites</h2>
                    <p>No less than 9 different rooms &amp; suites of great charm</p>
                    <div class="btn-wrap" style="padding-top:16px;">
                        <a href="{{url('/rooms')}}"
                           class="button"><i class="fa fa-calendar"></i><span> View Our Rooms</span></a>
                    </div>
            </div></div>            <div class="hp-accomodation-wrap" >
                <div class="accomodation-item-wrap slide1" style='background-image:url("{{URL::to('wp-content/uploads/2020/honeymoon/DCS 11061.jpg')}}")'>
                    <a href="{{route('book','honeymoonsuite')}}"
                       data-id="163" class="button btn-default">
                        <span>View & Book</span></a>
                    <div class="accomodation-footer">
                        <h2><a href="{{route('book','honeymoonsuite')}}"> Honey Moon Suite</a>
                        </h2>

                                <span class="price_value price_min">&nbsp;&#36;80.0</span>

                                                            <span class="unit">/&nbsp;Room</span>
                                                </div>
                </div>
                <div class="accomodation-item-wrap slide1" style='background-image:url("{{URL::to('wp-content/uploads/2020/royal/1.jpg')}}")'>
                        <a href="{{route('book','royalsuite')}}"
                           data-id="165" class="button btn-default">
                            <span>View & Book</span></a>
                        <div class="accomodation-footer">
                            <h2><a href="{{route('book','royalsuite')}}">Royal Suite</a>
                            </h2>

                                    <span class="price_value price_min">&nbsp;&#36;80.0</span>

                                                                <span class="unit">/&nbsp;Room</span>
                                                    </div>
                    </div>

                                    <div class="accomodation-item-wrap slide1" style='background-image:url("{{URL::to('wp-content/uploads/2020/family/DCS 11133.jpg')}}")'>
                        <a href="{{route('book','familysuite')}}"
                           data-id="161" class="button btn-default">
                            <span>View & Book</span></a>
                        <div class="accomodation-footer">
                            <h2><a href="{{route('book','familysuite')}}">Family Suite</a>
                            </h2>

                                    <span class="price_value price_min">&nbsp;&#36;70.0</span>

                                                                <span class="unit">/&nbsp;Room</span>
                                                    </div>
                    </div>
                                    <div class="accomodation-item-wrap slide1" style='background-image:url("{{URL::to('wp-content/uploads/2020/deluxe/DCS 11105.jpg')}}")'>
                        <a href="{{route('book','deluxesuite')}}"
                           data-id="114" class="button btn-default">
                            <span>View & Book</span></a>
                        <div class="accomodation-footer">
                            <h2><a href="{{route('book','deluxesuite')}}">Deluxe Suite</a>
                            </h2>

                                    <span class="price_value price_min">&nbsp;&#36;55.0</span>

                                                                <span class="unit">/&nbsp;Room</span>
                                                    </div>
                    </div>
                    <div class="accomodation-item-wrap slide1" style='background-image:url("{{URL::to('wp-content/uploads/2020/standard/DCS 11291.jpg')}}")'>
                        <a href="{{route('book','standardsuite')}}"
                           data-id="107" class="button btn-default">
                            <span>View & Book </span></a>
                        <div class="accomodation-footer">
                            <h2><a href="{{route('book','standardsuite')}}">Standard Suite</a>
                            </h2>

                                    <span class="price_value price_min">&nbsp;&#36;45.0</span>

                                                                <span class="unit">/&nbsp;Room</span>
                                                    </div>
                    </div>






                                    <div class="accomodation-item-wrap slide1" style='background-image:url("{{URL::to('wp-content/uploads/2020/budget/DCS 11281.jpg')}}")'>
                        <a href="{{route('book','budgetsuite')}}"
                           data-id="112" class="button btn-default">
                            <span>View & Book</span></a>
                        <div class="accomodation-footer">
                            <h2><a href="{{route('book','budgetsuite')}}">Budget Suite</a>
                            </h2>

                                    <span class="price_value price_min">&nbsp;&#36;35.0</span>

                                                                <span class="unit">/&nbsp;Room</span>
                                                    </div>
                    </div>

                            </div>
        </div>
    </section>



    <section id="services" class="hp-section features-sec" >
        <div class="container">
            <div class="row">
                                        <div class="section-title">
                        <h2>What Also We Offer</h2><p>just an intro to other services </p>                        </div>
                                    <div class="features-slider" >
                                                <div class="features-item-wrap">
                            <a href=""
                               class="tilter tilter--7 slider1" style='background-image:url("{{URL::to("wp-content/uploads/2020/extra/wedding.jpg")}}")'>
                                <div class="tilter__figure">
                                    <div class="tilter__deco tilter__deco--shine">
                                        <div></div>
                                    </div>
                                    <div class="tilter__caption">
                                        <h3 class="tilter__title">Venue </h3>
                                        <p class="tilter__description">Weddings ,conferences, parties, seminars.</p>
                                    </div>
                                    <svg class="tilter__deco tilter__deco--lines" viewBox="0 0 300 415">
                                        <path d="M20.5,20.5h260v375h-260V20.5z"/>
                                    </svg>
                                </div>
                            </a>
                        </div>
                                                <div class="features-item-wrap">
                            <a href=""
                               class="tilter tilter--7 slider1" style='background-image:url("{{URL::to("wp-content/uploads/2020/extra/photoshoot.jpg")}}")'>
                                <div class="tilter__figure">
                                    <div class="tilter__deco tilter__deco--shine">
                                        <div></div>
                                    </div>
                                    <div class="tilter__caption">
                                        <h3 class="tilter__title">Photoshooting </h3>
                                        <p class="tilter__description">Photoshoot Venue</p>
                                    </div>
                                    <svg class="tilter__deco tilter__deco--lines" viewBox="0 0 300 415">
                                        <path d="M20.5,20.5h260v375h-260V20.5z"/>
                                    </svg>
                                </div>
                            </a>
                        </div>
                                                <div class="features-item-wrap">
                            <a href=""
                               class="tilter tilter--7 slider1" style='background-image:url("{{URL::to("wp-content/uploads/2020/extra/picnic.jpg")}}")'>
                                <div class="tilter__figure">
                                    <div class="tilter__deco tilter__deco--shine">
                                        <div></div>
                                    </div>
                                    <div class="tilter__caption">
                                        <h3 class="tilter__title">Picnic</h3>
                                        <p class="tilter__description">Picnic outing</p>
                                    </div>
                                    <svg class="tilter__deco tilter__deco--lines" viewBox="0 0 300 415">
                                        <path d="M20.5,20.5h260v375h-260V20.5z"/>
                                    </svg>
                                </div>
                            </a>
                        </div>
                                                <div class="features-item-wrap">
                            <a href=""
                               class="tilter tilter--7 slider1" style='background-image:url("{{URL::to("wp-content/uploads/2020/extra/prayer1.jpg")}}")'>
                                <div class="tilter__figure">
                                    <div class="tilter__deco tilter__deco--shine">
                                        <div></div>
                                    </div>
                                    <div class="tilter__caption">
                                        <h3 class="tilter__title">Prayer retreats</h3>
                                        <p class="tilter__description">Prayer retreat centre</p>
                                    </div>
                                    <svg class="tilter__deco tilter__deco--lines" viewBox="0 0 300 415">
                                        <path d="M20.5,20.5h260v375h-260V20.5z"/>
                                    </svg>
                                </div>
                            </a>
                        </div>

                        <div class="features-item-wrap">
                            <a href=""
                               class="tilter tilter--7 slider1" style='background-image:url("{{URL::to("wp-content/uploads/2020/extra/makeup.jpg")}}")'>
                                <div class="tilter__figure">
                                    <div class="tilter__deco tilter__deco--shine">
                                        <div></div>
                                    </div>
                                    <div class="tilter__caption">
                                        <h3 class="tilter__title">Resident makeup artist</h3>
                                        <p class="tilter__description">Resident makeup artist</p>
                                    </div>
                                    <svg class="tilter__deco tilter__deco--lines" viewBox="0 0 300 415">
                                        <path d="M20.5,20.5h260v375h-260V20.5z"/>
                                    </svg>
                                </div>
                            </a>
                        </div>
                                        </div>
            </div>
        </div>
    </section>





    <!-- Start of testimonial section -->
    <section id="testimonial" class="hp-section testimonials-sec" >
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="section-content">
                    <h2>Our Clients Say</h2>
                        <div class="testimonial-slider text-center" >

                            @foreach($current_review as $cr)
                                <div class="testimonial-slide">
                                    <div class="client-testimonial"><p>{{$cr->comment}}.</p></div>

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
                                    <h3 class="testimonial-title">{{$cr->name}}</h3>
                                </div>
                            @endforeach

                        </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Start of contact section -->
<section id="contact" class="section contact" style='background-image:url("wp-content/uploads/2020/")'>
    <div class="container">
        <div class="row">
            <div class="contact-wrapper">
                <div class="contact-form-wrap">
                                            <div class="section-title txt-center">
                            <h2>Contact Us</h2><p>You need more information? Give us a ring or Find us at the office</p>
                                                  </div>
                                            <form action="{{route('message_us')}}" method= "POST" >
                                            @csrf

                        <div class="col-md-6 col-sm-12">
                                <span class="input input--nao">
                                    <input id="name" name="name" class="input__field input__field--nao" type="text" required />
                                    <label class="input__label input__label--nao">
                                        <span class="input__label-content input__label-content--nao">Name</span>
                                    </label>
                                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                                    </svg>
                                </span>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <span class="input input--nao">
                                <input id="phone" name="phone" class="input__field input__field--nao" type="text" required />
                                <label class="input__label input__label--nao">
                                    <span class="input__label-content input__label-content--nao">Phone</span>
                                </label>
                                <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                                </svg>
                            </span>
                    </div>
                        <div class="col-md-6 col-sm-12" style="padding-top: 30px;">

                                <span class="input input--nao">
                                    <input id="user_email" name="email" class="input__field input__field--nao" type="email" />
                                    <label class="input__label input__label--nao">

                                        <span class="input__label-content input__label-content--nao">Email</span>
                                    </label>
                                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                                    </svg>
                                </span>
                        </div>

                        <div class="col-md-6 col-sm-12">
                                <span class="input input--nao message">
                                    <textarea class="input__field input__field--nao" rows="4" id="comments" name="message"></textarea>
                                    <label class="input__label input__label--nao">
                                        <span class="input__label-content input__label-content--nao">Message</span>
                                    </label>
                                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                                    </svg>
                                </span>
                        </div>
                        <Button type="submit" class="button btn btn-default" >Submit</Button>

                    </form>
                </div>
                <div class="contact-info">
                    <h3>Mufaro Wenyasha Mountain Lodge</h3><p>Number 8189 Simpson Rd, Gweru, Zimbabwe</p><br><p><strong>Email: </strong> mufarowenyasha@gmail.com</p><p><strong>Phone number: </strong>+263 542 225 219</p><p><strong>Whatsapp: </strong>+263 772 284 387</p>
                      <section>
                          <div style="width: 100%"><iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Number%208189%20Simpson%20Rd,%20Gweru,%20Zimbabwe+(Mufaro%20Wenyasha%20Mountain%20Lodge)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/">gps trackers</a></iframe></div>
                      </section>


                                        </div>
            </div>
        </div>
    </div>
</section>
<!-- End of contact section -->

<!-- Footer -->
<footer class="theme-footer">
    <div class="widget-area footer-widgets footer-widget-area-top">
        <div class="container">
            <div class="row">

                                                    <div class="col-md-4 col-sm-12">
                                <aside id="text-2" class="widget widget_text"><h4 class="widget-title">Service</h4>			<div class="textwidget" style="text-align:justify;"><p>
Visit us and enjoy the comfort, peace and tranquility and the flora and fauna served by a very helpful and friendly staff.
What you see is what you get and more. Our prices are deceivingly more than reasonable.
<br />
T : <a href="">+263 542 225 219</a><br />
E : <a href="">mufarowenyasha@gmail.com</a></p>
</div>
		</aside>                            </div>


                                                                                <div class="col-md-6 col-sm-12">
                                <aside id="media_gallery-2" class="widget widget_media_gallery"><h4 class="widget-title">Gallery</h4><div id='gallery-1' class='gallery galleryid-117 gallery-columns-3 gallery-size-thumbnail'><figure class='gallery-item'>
			<div class='gallery-icon landscape'>
				<a href='wp-content/uploads/2020/gallery/DCS 11081.jpg'><img width="300" height="300" src="wp-content/uploads/2020/gallery/DCS 11081.jpg" class="attachment-thumbnail size-thumbnail" alt="" srcset="wp-content/uploads/2020/gallery/DCS 11081.jpg 300w, wp-content/uploads/2020/gallery/DCS 11081.jpg 300w, wp-content/uploads/2020/gallery/DCS 11081.jpg 100w" sizes="(max-width: 300px) 100vw, 300px" /></a>
			</div></figure><figure class='gallery-item'>
			<div class='gallery-icon landscape'>
				<a href='wp-content/uploads/2020/gallery/DCS 11089.jpg'><img width="300" height="300" src="wp-content/uploads/2020/gallery/DCS 11089.jpg" class="attachment-thumbnail size-thumbnail" alt="" srcset="wp-content/uploads/2020/gallery/DCS 11089.jpg 300w, wp-content/uploads/2020/gallery/DCS 11089.jpg 300w, wp-content/uploads/2020/gallery/DCS 11089.jpg 100w" sizes="(max-width: 300px) 100vw, 300px" /></a>
			</div></figure><figure class='gallery-item'>
			<div class='gallery-icon landscape'>
				<a href='wp-content/uploads/2020/gallery/DCS 11084.jpg'><img width="300" height="300" src="wp-content/uploads/2020/gallery/DCS 11084.jpg" class="attachment-thumbnail size-thumbnail" alt="" srcset="wp-content/uploads/2020/gallery/DCS 11084.jpg 300w, wp-content/uploads/2020/gallery/DCS 11084.jpg 300w, wp-content/uploads/2020/gallery/DCS 11084.jpg 100w" sizes="(max-width: 300px) 100vw, 300px" /></a>
			</div></figure><figure class='gallery-item'>
			<div class='gallery-icon landscape'>
				<a href='wp-content/uploads/2020/gallery/DCS 11085.jpg'><img width="300" height="300" src="wp-content/uploads/2020/gallery/DCS 11085.jpg" class="attachment-thumbnail size-thumbnail" alt="" srcset="wp-content/uploads/2020/gallery/DCS 11085.jpg 300w, wp-content/uploads/2020/gallery/DCS 11085.jpg 300w, wp-content/uploads/2020/gallery/DCS 11085.jpg 100w" sizes="(max-width: 300px) 100vw, 300px" /></a>
			</div></figure><figure class='gallery-item'>
			<div class='gallery-icon landscape'>
				<a href='wp-content/uploads/2020/gallery/DCS 11090.jpg'><img width="300" height="300" src="wp-content/uploads/2020/gallery/DCS 11090.jpg" class="attachment-thumbnail size-thumbnail" alt="" srcset="wp-content/uploads/2020/gallery/DCS 11090.jpg 300w, wp-content/uploads/2020/gallery/DCS 11090.jpg 300w, wp-content/uploads/2020/gallery/DCS 11090.jpg 100w" sizes="(max-width: 300px) 100vw, 300px" /></a>
			</div></figure><figure class='gallery-item'>
			<div class='gallery-icon landscape'>
				<a href='wp-content/uploads/2020/gallery/DCS 11077.jpg'><img width="300" height="300" src="wp-content/uploads/2020/gallery/DCS 11077.jpg" class="attachment-thumbnail size-thumbnail" alt="" srcset="wp-content/uploads/2020/gallery/DCS 11077.jpg 300w, wp-content/uploads/2020/gallery/DCS 11077.jpg 300w, wp-content/uploads/2020/gallery/DCS 11077.jpg 100w" sizes="(max-width: 300px) 100vw, 300px" /></a>
			</div></figure>
		</div>
</aside>                            </div>
                                                            </div>
            <!-- End Row -->
        </div>
        <!-- End Container -->
    </div>
    <!-- Footer Widgets -->
@endsection
