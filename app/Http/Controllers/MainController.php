<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\Enquiry;
use App\Booking;
use Carbon\Carbon;
use App\Message;
use App\Review;


class MainController extends Controller
{
    //

    public function init_booking(Request $request,$name)
    {

        $current_room=Room::where('url_name',$name)->first();
        $current_review=Review::where('room_name',$current_room->name)->where('id',0)->get();
        $current_count=Review::where('room_name',$current_room->name)->count();
        $other_rooms=Room::where('url_name','!=',$name)->get();
        return view('rooms',compact('current_room','other_rooms','current_review','current_count'));
    }
    public function entry()
    {
        return view('welcome');
    }
    public function gallery()
    {
        return view('gallery');
    }

    public function room_booking(Request $request)
    {
        $this->validate($request, [

            'checkin_date' => 'required',
            'checkout_date' => 'required',
            'adults' => 'required',
            'children' => 'required',
            'room_name' => 'required',

        ]);
        $input=$request->all();
        $name=$request->input('room_name');
        $room=Room::where('name',$name)->first();

        $checkin_date=$request->input('checkin_date');

        $total_rooms=$room->number_of_rooms;
        $booked=$room->number_of_booked;

        $booked_from=$room->booked_from;
        $booked_to=$room->booked_to;

        if($total_rooms==$booked)
        {


$date1 = Carbon::parse($request->input($booked_to));
$date2 = Carbon::parse($request->input($booked_from));
$date3 = Carbon::parse($request->input($checkin_date));
$days = $date3->diffInDays($date2);

            if ($days <= 0) {
                $fully_booked="fully booked";
                return back()->with('error', $name.' room(s) are fully booked for that period, you can try another. Thank you.');
            } else {

            }
        }

$date1 = Carbon::parse($request->input('checkin_date'));
$date2 = Carbon::parse($request->input('checkout_date'));
$days = $date1->diffInDays($date2);


        $enquirydata = Enquiry::create($input);
        $enq=$enquirydata->id;

        $current_room=Room::where('name',$name)->first();
        $enquiry_details=Enquiry::where('id',$enq)->first();
        return view('finish_booking',compact('current_room','enquiry_details','days'));
    }

    public function finishbooking(Request $request)
    {
        $this->validate($request, [
            'checkin_date' => 'required',
            'checkout_date' => 'required',
            'adults' => 'required',
            'children' => 'required',
            'room_name' => 'required',
            'name' => 'required',
            'phone' => 'required|min:8|numeric',
            'email' => 'required|email',
            'amount'=> 'required',
        ]);
        $input=$request->all();
        $name=$request->input('room_name');
        $to_name = $request->input('name');
        $to_email = $request->input('email');
        $enquirydata = Booking::create($input);

        $whole_message_email0="client named ".$to_name." have booked online with us, the client contact details are: Phone:".$request->input('phone')." , Email: ".$request->input('email') ." ,for suite: ".$request->input('room_name')." ,for the amount: of $".$request->input('amount').". Please get intouch with the client ASAP as he/she await your call";


        $whole_message_email="Thank you for booking with us, We will be contacting you shortly.";

        //email starts
$data = array("name"=>$to_name, "body" => $whole_message_email);
$mailer = app()['mailer'];
$mailer->send("emails.mail", $data, function($message) use ($to_name, $to_email) {
$message->to($to_email, $to_name)
->subject("Mufarowenyasha Accomodation Enquiries");
$message->from("mufarowenyasha@gmail.com","Mufarowenyasha Mountain Lodge");
});

        $to_name = "Mufaro Wenyasha Admin";
        $to_email = "mufarowenyasha@gmail.com";
$data = array("name"=>$to_name, "body" => $whole_message_email0);
$mailer = app()['mailer'];
$mailer->send("emails.mail", $data, function($message) use ($to_name, $to_email) {
$message->to($to_email, $to_name)
->subject("Mufarowenyasha Accomodation Enquiries");
$message->from("mufarowenyasha@gmail.com","Mufarowenyasha Mountain Lodge");
});

//klkkkkkk

        return redirect()->route('suites')
                    ->with('success', 'Successfully booked '.$name.' at Mufaro Wenyasha Mountain Lodge, we will contact you shortly to finalise your booking, for the mean time you can check your email.');

    }
    public function suites()
    {
        return view('booking_main');
    }

    public function availability(Request $request)
    {

        $checkout_date=$request->input('checkout_date');
        $checkin_date=$request->input('checkin_date');
        $adults=$request->input('adults');
        $children=$request->input('children');

        return redirect()->route('suites')
                    ->with('success', 'Below rooms are available at Mufaro Wenyasha Mountain Lodge, contact us on +263 77 228 4387 / +263 77 356 1596 or book online and we will contact you shortly.');

    }

    public function message_us(Request $request)
    {

        $input=$request->all();
        $enquirydata = Message::create($input);
        return back()->with('success','Message Successfully sent, if action needed we will get back to you.');

    }

    public function review_post(Request $request)
    {

        $input=$request->all();
        $enquirydata = Review::create($input);
        return back()->with('success','Message Successfully made a review.');

    }

}
