!function(t){var e=t(document);function a(t){return Number(t)||t%1==0}function n(t){return new RegExp("^[-!#$%&'*+\\./0-9=?A-Z^_`a-z{|}~]+@[-!#$%&'*+\\/0-9=?A-Z^_`a-z{|}~]+.[-!#$%&'*+\\./0-9=?A-Z^_`a-z{|}~]+$").test(t)}function i(t){return t=new Date(t),!isNaN(t.getTime())}function r(e){if(!t.isPlainObject(e)){var a=e.match(/<!-- HB_AJAX_START -->(.*)<!-- HB_AJAX_END -->/);try{e=a?t.parseJSON(a[1]):t.parseJSON(e)}catch(t){e={}}}return e}function o(){var e=t(this),a=t('input[name="existing-customer-email"]');if(!n(a.val()))return a.addClass("error"),void a.focus();e.attr("disabled",!0),a.attr("disabled",!0);var i=t(".hb-col-padding.hb-col-border");t.ajax({url:hotel_settings.ajax,dataType:"html",type:"post",data:{action:"hotel_booking_fetch_customer_info",email:a.val()},beforeSend:function(){i.hb_overlay_ajax_start()},success:function(n){if(i.hb_overlay_ajax_stop(),(n=r(n))&&n.ID){var o=t("#hb-order-new-customer");for(var l in n.data){var _=l.replace(/^_hb_customer_/,"");o.find('input[name="'+_+'"], select[name="'+_+'"], textarea[name="'+_+'"]').val(n.data[l])}o.find('input[name="existing-customer-id"]').val(n.ID),t(".hb-order-existing-customer").fadeOut(function(){})}else s([hotel_booking_i18n.invalid_email]);e.removeAttr("disabled"),a.removeAttr("disabled")},error:function(){i.hb_overlay_ajax_stop(),s([hotel_booking_i18n.ajax_error]),e.removeAttr("disabled"),a.removeAttr("disabled")}})}function s(e){if(0!==e.length){t(".hotel_checkout_errors").slideUp().remove();var a=[];a.push('<div class="hotel_checkout_errors">');for(var n=0;n<e.length;n++)a.push("<p>"+e[n]+"</p>");a.push("</div>"),t("#hb-payment-form h3:first-child").after(a.join(""))}}function l(e){var a="pk_test_HHukcwWCsD7qDFWKKpKdJeOT";"undefined"!=typeof TPBooking_Payment_Stripe&&(a=TPBooking_Payment_Stripe.stripe_publish);var n=StripeCheckout.configure({key:a,image:"https://stripe.com/img/documentation/checkout/marketplace.png",locale:"auto",token:function(a){!function(e,a){var n={},i=e.serializeArray(),o=e.find('button[type="submit"]'),s=o.html();t.each(i,function(t,e){n[e.name]=e.value}),t.extend(a,n),t.ajax({url:hotel_settings.ajax,data:a,type:"POST",dataType:"html",beforeSend:function(){o.attr("disabled","disabled"),o.html('<span class="lds-ring"><span></span><span></span><span></span><span></span></span>'+o.html())}}).done(function(t){o.html(s),void 0!==(t=r(t)).result&&"success"==t.result?void 0!==t.redirect&&(window.location.href=t.redirect):void 0!==t.message&&alert(t.message)}).fail(function(){o.html(s)})}(e,a)}}),i=e.find('input[name="first_name"]').val().trim(),o=e.find('input[name="last_name"]').val().trim(),s=e.find('input[name="email"]').val().trim(),l=e.find('input[name="currency"]').val().trim(),_=0;_=e.find('input[name="pay_all"]').is(":checked")?e.find('input[name="total_price"]').val():e.find('input[name="total_advance"]').val(),n.open({name:i+" "+o,description:s,currency:l,amount:100*_})}null==Date.prototype.compareWith&&(Date.prototype.compareWith=function(t){"string"==typeof t&&(t=new Date(t));var e=parseInt(this.getTime()/1e3),a=parseInt(t.getTime()/1e3);return e>a?1:e<a?-1:0}),HB_Booking_Cart={init:function(){this.add_to_cart(),this.remove_cart(),this.add_extra_to_cart()},hb_add_to_cart_callback:function(e,a){var n=t(".hotel_booking_mini_cart"),i=n.length,r=wp.template("hb-minicart-item");if(r=r(e),i>0)for(var o=0;o<i;o++){var s=t(n[o]),l=t(n[o]).find(".hb_mini_cart_item"),_=!1,d=s.find(".hb_mini_cart_empty"),c=s.find(".hb_mini_cart_footer"),h=l.length;if(0===h){var m=wp.template("hb-minicart-footer");1===d.length?(d.after(m({})),d.before(r)):c.before(r),_=!0;break}for(var u=0;u<h;u++){var p=t(l[u]),f=p.attr("data-cart-id");if(e.cart_id===f){p.replaceWith(r),_=!0;break}}!1===_&&c.before(r)}t(".hb_mini_cart_empty").remove();var v=setTimeout(function(){t(".hb_mini_cart_item").removeClass("active"),clearTimeout(v)},3500);void 0!==a&&a()},hb_remove_cart_item_callback:function(e,a){for(var n=t(".hotel_booking_mini_cart"),i=0;i<n.length;i++){for(var r=t(n[i]),o=r.find(".hb_mini_cart_item"),s=0;s<o.length;s++){var l=t(o[s]),_=l.attr("data-cart-id");if(e===_){l.remove();break}}if(0===(o=r.find(".hb_mini_cart_item")).length){var d=wp.template("hb-minicart-empty");r.find(".hb_mini_cart_footer").remove(),r.append(d({}));break}}var c=t("#hotel-booking-payment, #hotel-booking-cart");for(i=0;i<c.length;i++){var h=t(c[i]),m=h.find("table").find(".hb_checkout_item, .hb_addition_services_title");for(s=0;s<m.length;s++){var u=t(m[s]);_=u.attr("data-cart-id"),parent_item_id=u.attr("data-parent-id"),e!==_&&e!==parent_item_id||u.remove()}void 0!==a.sub_total&&h.find("span.hb_sub_total_value").html(a.sub_total),void 0!==a.grand_total&&h.find("span.hb_grand_total_value").html(a.grand_total),void 0!==a.advance_payment&&h.find("span.hb_advance_payment_value").html(a.advance_payment)}},add_to_cart:function(){t("form.hb-search-room-results");t(document).on("submit","form.hb-search-room-results",function(e){e.preventDefault();var a=t(this),n=a.find(".hb_add_to_cart"),i=n.html(),o=a.find(".number_room_select"),s=a.find(".number_room_select option:selected").val(),l=a.find(".hb-room-name");if(t(".number_room_select").removeClass("hotel_booking_invalid_quantity"),void 0===s||""===s){o.addClass("hotel_booking_invalid_quantity"),l.find(".hb_success_message").remove(),l.append('<label class="hb_success_message">'+hotel_booking_i18n.waring.room_select+"</label>");setTimeout(function(){l.find(".hb_success_message").remove()},2e3);return!1}var _=t(this).serializeArray();return t.ajax({url:hotel_settings.ajax,type:"POST",data:_,dataType:"html",beforeSend:function(){n.attr("disabled","disabled"),n.html('<span class="lds-ring"><span></span><span></span><span></span><span></span></span>'+n.html())},success:function(e){if(a.hb_overlay_ajax_stop(),void 0!==(e=r(e)).message){l.find(".hb_success_message").remove(),l.append('<div class="hb_success_message">'+e.message+"</div>");setTimeout(function(){l.find(".hb_success_message").remove()},3e3)}void 0!==e.status&&"success"===e.status?(t("body").trigger("hb_added_item_to_cart"),void 0!==e.redirect&&e.redirect&&(window.location.href=e.redirect)):alert(e.message),void 0!==e.id&&HB_Booking_Cart.hb_add_to_cart_callback(e),n.html(i),n.removeAttr("disabled"),a.find(".hb_search_add_to_cart").length&&(a.find(".hb_search_add_to_cart .hb_view_cart").length||n.after('<a href="'+hotel_booking_i18n.cart_url+'" class="hb_button hb_view_cart">'+hotel_booking_i18n.view_cart+"</a>"))},error:function(){n.html(i),alert(hotel_booking_i18n.waring.try_again)}}),!1})},add_extra_to_cart:function(){t(document).on("submit","form.hb-select-extra-results",function(e){e.preventDefault();var a=t(document).find("button.hb_button");a.attr("disabled","disabled"),a.html('<span class="lds-ring"><span></span><span></span><span></span><span></span></span>'+a.html());var n=t(this).serializeArray();t.ajax({url:hotel_settings.ajax,type:"POST",data:n,dataType:"html",success:function(t){t=r(t),window.location.href=t.redirect}})})},remove_cart:function(){t(document).on("click",".hb_remove_cart_item",function(e){e.preventDefault();var a=t(this).parents("tr"),n=t(this).attr("data-cart-id");t.ajax({url:hotel_settings.ajax,type:"POST",data:{cart_id:n,nonce:hotel_settings.nonce,action:"hotel_booking_ajax_remove_item_cart"},dataType:"html",beforeSend:function(){a.hb_overlay_ajax_start()}}).done(function(e){void 0!==(e=r(e)).status&&"success"===e.status||alert(hotel_booking_i18n.waring.try_again),t("body").trigger("hb_removed_item_to_cart"),void 0!==e.sub_total&&t("span.hb_sub_total_value").html(e.sub_total),void 0!==e.grand_total&&t("span.hb_grand_total_value").html(e.grand_total),void 0!==e.advance_payment&&t("span.hb_advance_payment_value").html(e.advance_payment),a.hb_overlay_ajax_stop(),a.remove(),HB_Booking_Cart.hb_remove_cart_item_callback(n,e)})}),t(".hotel_booking_mini_cart").on("click",".hb_mini_cart_remove",function(e){e.preventDefault();t(".hotel_booking_mini_cart");var a=t(this).parents(".hb_mini_cart_item"),n=a.attr("data-cart-id");t.ajax({url:hotel_settings.ajax,type:"POST",data:{cart_id:n,nonce:hotel_settings.nonce,action:"hotel_booking_ajax_remove_item_cart"},dataType:"html",beforeSend:function(){a.addClass("before_remove"),a.hb_overlay_ajax_start()}}).done(function(t){void 0!==(t=r(t)).status&&"success"===t.status?(HB_Booking_Cart.hb_remove_cart_item_callback(n,t),a.hb_overlay_ajax_stop()):alert(hotel_booking_i18n.waring.try_again)})})}},t(document).ready(function(){HB_Booking_Cart.init(),t.datepicker.setDefaults({dateFormat:hotel_booking_i18n.date_time_format});var _=new Date,d=new Date,c=t(document).triggerHandler("hotel_booking_min_check_in_date",[1,_,d]);a(c=parseInt(c))||(c=1),d.setDate(_.getDate()+c),t('input[id^="check_in_date"]').datepicker({dateFormat:hotel_booking_i18n.date_time_format,firstDay:hotel_booking_i18n.date_start,monthNames:hotel_booking_i18n.monthNames,monthNamesShort:hotel_booking_i18n.monthNamesShort,dayNames:hotel_booking_i18n.dayNames,dayNamesShort:hotel_booking_i18n.dayNamesShort,dayNamesMin:hotel_booking_i18n.dayNamesMin,minDate:_,maxDate:"+365D",numberOfMonths:1,onSelect:function(){var e=t(this).attr("id");e=e.replace("check_in_date_","");var n=t(this).datepicker("getDate"),i=hotel_settings.min_booking_date;a(i)||(i=1),n&&n.setDate(n.getDate()+i),t("#check_out_date_"+e).datepicker("option","minDate",n)}}).on("click",function(){t(this).datepicker("show")}),t('input[id^="check_out_date"]').datepicker({dateFormat:hotel_booking_i18n.date_time_format,monthNames:hotel_booking_i18n.monthNames,monthNamesShort:hotel_booking_i18n.monthNamesShort,dayNames:hotel_booking_i18n.dayNames,dayNamesShort:hotel_booking_i18n.dayNamesShort,dayNamesMin:hotel_booking_i18n.dayNamesMin,minDate:d,maxDate:"+365D",numberOfMonths:1,onSelect:function(){var e=t(this).attr("id");e=e.replace("check_out_date_","");var n=t("#check_in_date_"+e),i=t(this).datepicker("getDate"),r=hotel_settings.min_booking_date;a(r)||(r=1),i.setDate(i.getDate()-r),n.datepicker("option","maxDate",i)}}).on("click",function(){t(this).datepicker("show")}),t("#datepickerImage").click(function(){t("#txtFromDate").datepicker("show")}),t("#datepickerImage1").click(function(){t("#txtToDate").datepicker("show")}),t('form[class^="hb-search-form"]').submit(function(e){e.preventDefault();var a=t(this),n=a.attr("class"),o=a.find('button[type="submit"]');n=n.replace("hb-search-form-",""),a.find("input, select").removeClass("error");var s=t("#check_in_date_"+n);if(""===s.val()||!i(s.datepicker("getDate")))return s.addClass("error"),!1;var l=t("#check_out_date_"+n);if(""===l.val()||!i(l.datepicker("getDate")))return l.addClass("error"),!1;if(null===s.datepicker("getDate"))return s.addClass("error"),!1;if(null===l.datepicker("getDate"))return l.addClass("error"),!1;var _=new Date(s.datepicker("getDate")),d=new Date(l.datepicker("getDate"));new Date;if(_.compareWith(d)>=0)return s.addClass("error"),error=!0,!1;for(var c=t(this).attr("action")||window.location.href,h=t(this).serializeArray(),m=0;m<h.length;m++){var u=h[m];if("check_in_date"===u.name||"check_out_date"===u.name){var p=t(this).find('input[name="'+u.name+'"]').datepicker("getDate");p=new Date(p),h.push({name:"hb_"+u.name,value:p.getTime()/1e3-60*p.getTimezoneOffset()})}}return t.ajax({url:hotel_settings.ajax,type:"post",dataType:"html",data:h,beforeSend:function(){o.attr("disabled","disabled"),o.html('<span class="lds-ring"><span></span><span></span><span></span><span></span></span>'+o.html())},success:function(t){void 0!==(t=r(t)).success&&t.success&&(void 0!==t.url?window.location.href=t.url:t.sig&&(-1===c.indexOf("?")?c+="?hotel-booking-params="+t.sig:c+="&hotel-booking-params="+t.sig,window.location.href=c))}}),!1}),t("form#hb-payment-form").submit(function(e){e.preventDefault();var a=t(this),i=a.find('input[name="hb-payment-method"]:checked').val(),o=window.location.href.replace(/\?.*/,"");a.find(".hotel_checkout_errors").slideUp().remove(),a.find("input, select").parents("div:first-child").removeClass("error");try{if(!1===a.triggerHandler("hb_order_submit"))return!1;if(a.attr("action",o),!function(e){var a=e.find('select[name="title"]'),i=[];1===a.length&&-1===a.val()&&(i.push(hotel_booking_i18n.empty_customer_title),a.parents("div:first").addClass("error"));var r=e.find('input[name="first_name"]');1!==r.length||r.val()||(i.push(hotel_booking_i18n.empty_customer_first_name),r.parents("div:first").addClass("error"));var o=e.find('input[name="last_name"]');1!==o.length||o.val()||(i.push(hotel_booking_i18n.empty_customer_last_name),o.parents("div:first").addClass("error"));var l=e.find('input[name="address"]');1!==l.length||l.val()||(i.push(hotel_booking_i18n.empty_customer_address),l.parents("div:first").addClass("error"));var _=e.find('input[name="city"]');1!==_.length||_.val()||(i.push(hotel_booking_i18n.empty_customer_city),_.parents("div:first").addClass("error"));var d=e.find('input[name="state"]');1!==d.length||d.val()||(i.push(hotel_booking_i18n.empty_customer_state),d.parents("div:first").addClass("error"));var c=e.find('input[name="postal_code"]');1!==c.length||c.val()||(i.push(hotel_booking_i18n.empty_customer_postal_code),c.parents("div:first").addClass("error"));var h=e.find('select[name="country"]');1!==h.length||h.val()||(i.push(hotel_booking_i18n.empty_customer_country),h.parents("div:first").addClass("error"));var m=e.find('input[name="phone"]');1!==m.length||m.val()||(i.push(hotel_booking_i18n.empty_customer_phone),m.parents("div:first").addClass("error"));var u=e.find('input[name="email"]');1!==u.length||n(u.val())||(i.push(hotel_booking_i18n.customer_email_invalid),u.parents("div:first").addClass("error"));var p=e.find('input[name="hb-payment-method"]:checked');1===p.length&&0===p.length&&(i.push(hotel_booking_i18n.no_payment_method_selected),p.parents("div:first").addClass("error"));var f=e.find('input[name="tos"]');return f.length&&!f.is(":checked")&&(i.push(hotel_booking_i18n.confirm_tos),f.addClass("error")),t('input[name="existing-customer-id"]').val()&&(u.val()!=t('input[name="existing-customer-email"]',e).val()&&i.push(hotel_booking_i18n.customer_email_not_match),u.parents("div:first").addClass("error"),e.find('input[name="existing-customer-id"]').parents("div:first").addClass("error")),!(i.length>0&&(s(i),1))}(a))return!1;"stripe"===i?l(a):function(e){var a=window.location.href.replace(/\?.*/,"");e.attr("action",a);var n=e.find('button[type="submit"]'),i=n.html();!1!==e.triggerHandler("hotel_booking_place_order")&&t.ajax({type:"POST",url:hotel_settings.ajax,data:e.serialize(),dataType:"text",beforeSend:function(){n.attr("disabled","disabled"),n.html('<span class="lds-ring"><span></span><span></span><span></span><span></span></span>'+n.html())},success:function(t){n.html(i);try{var e=r(t);"success"===e.result?void 0!==e.redirect&&(window.location.href=e.redirect):void 0!==e.message&&alert(e.message)}catch(t){alert(t)}},error:function(){n.html(i),s([hotel_booking_i18n.waring.try_again])}})}(a)}catch(e){alert(e)}}),t("#fetch-customer-info").click(o),e.on("click",".hb-view-booking-room-details, .hb_search_room_item_detail_price_close",function(e){e.preventDefault(),t(this).parents(".hb-room-content").find(".hb-booking-room-details").toggleClass("active")}).on("click",'input[name="hb-payment-method"]',function(){this.checked&&(t(".hb-payment-method-form:not(."+this.value+")").slideUp(),t(".hb-payment-method-form."+this.value).slideDown())}).on("click","#hb-apply-coupon",function(){!function(){var e=t('input[name="hb-coupon-code"]'),a=e.parents("table");if(!e.val())return alert(hotel_booking_i18n.enter_coupon_code),e.focus(),!1;t.ajax({type:"POST",url:hotel_settings.ajax,data:{action:"hotel_booking_apply_coupon",code:e.val()},dataType:"text",beforeSend:function(){a.hb_overlay_ajax_start()},success:function(t){a.hb_overlay_ajax_stop();try{var e=r(t);"success"==e.result?window.location.href=window.location.href:alert(e.message)}catch(t){alert(t)}},error:function(){a.hb_overlay_ajax_stop(),alert("error")}})}()}).on("click","#hb-remove-coupon",function(e){e.preventDefault();var a=t(this).parents("table");t.ajax({url:hotel_settings.ajax,type:"post",dataType:"html",data:{action:"hotel_booking_remove_coupon"},beforeSend:function(){a.hb_overlay_ajax_start()},success:function(t){a.hb_overlay_ajax_stop(),"success"==(t=r(t)).result&&(window.location.href=window.location.href)}})});var h=t(".hb_single_room_details"),m=h.find(".hb_single_room_tabs"),u=h.find(".hb_single_room_tabs_content"),p=t(".hb_single_room_tab_details"),f=window.location.href.match(/\#comment-[0-9]+/gi);f&&void 0!==f[0]?(m.find("a").removeClass("active"),m.find('a[href="#hb_room_reviews"]').addClass("active")):(m.find("a:first").addClass("active"),t(".hb_single_room_tabs_content .hb_single_room_tab_details:not(:first)").hide()),p.hide();var v=m.find("a.active").attr("href");u.find(v).fadeIn(),m.find("a").on("click",function(e){e.preventDefault(),m.find("a").removeClass("active"),t(this).addClass("active");var a=t(this).attr("href");return p.hide(),u.find(a).fadeIn(),!1}),t(".hb-rating-input").rating(),t("#commentform").submit(function(){var e=t("#rating"),a=e.val();if(1===e.length&&void 0!==a&&""===a)return window.alert(hotel_booking_i18n.review_rating_required),!1;t(this).submit()})}),t.fn.rating=function(){for(var e=this,a=this.length,n=0;n<a;n++){var i=t(e[n]),r=[];r.push('<span class="rating-input" data-rating="1"></span>'),r.push('<span class="rating-input" data-rating="2"></span>'),r.push('<span class="rating-input" data-rating="3"></span>'),r.push('<span class="rating-input" data-rating="4"></span>'),r.push('<span class="rating-input" data-rating="5"></span>'),r.push('<input name="rating" id="rating" type="hidden" value="" />'),i.html(r.join("")),i.mousemove(function(a){a.preventDefault();for(var n=e.offset(),i=a.pageX-n.left,r=t(this).find(".rating-input"),o=r.width(),s=Math.ceil(i/o),l=0;l<r.length;l++){var _=t(r[l]);parseInt(_.attr("data-rating"))<=s&&_.addClass("high-light")}}).mouseout(function(a){var n=e.offset(),i=(a.pageX,n.left,t(this).find(".rating-input")),r=(i.width(),t(this).find(".rating-input.selected"));if(0===r.length)i.removeClass("high-light");else for(var o=0;o<i.length;o++){var s=t(i[o]);parseInt(s.attr("data-rating"))<=parseInt(r.attr("data-rating"))?s.addClass("high-light"):s.removeClass("high-light")}}).mousedown(function(a){var n=e.offset(),r=a.pageX-n.left,o=t(this).find(".rating-input"),s=o.width(),l=Math.ceil(r/s);o.removeClass("selected").removeClass("high-light");for(var _=0;_<o.length;_++){var d=t(o[_]);if(parseInt(d.attr("data-rating"))===l){d.addClass("selected").addClass("high-light");break}d.addClass("high-light")}i.find('input[name="rating"]').val(l)})}},t.fn.hb_overlay_ajax_start=function(){this.css({position:"relative",overflow:"hidden"});this.append('<div class="hb_overlay_ajax"></div>')},t.fn.hb_overlay_ajax_stop=function(){var t=this.find(".hb_overlay_ajax");t.addClass("hide");var e=setTimeout(function(){t.remove(),clearTimeout(e)},400)}}(jQuery);