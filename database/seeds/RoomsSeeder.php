<?php

use Illuminate\Database\Seeder;
use App\Room;

class RoomsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $honeymoonsuite = Room::create([
        	'name' => 'Honey Moon Suite',
        	'description' => 'Top of the range for the young at heart and discening executive.The usual perks are available. Extras include an emaculate balcony offering splendid views, romantic settings, air conditioning, relaxation couches, work station, mini bar, choice of bathtub and shower, DSTV television, internet access, coffee maker, king  sized bed and unparalled service',
            'price' => '80',
            'picture1' => 'wp-content/uploads/2020/honeymoon/DCS 11061.jpg',
        	'picture2' => 'wp-content/uploads/2020/honeymoon/DCS 11060.jpg',
        	'picture3' => 'wp-content/uploads/2020/honeymoon/DCS 11070.jpg',
            'picture4' => 'wp-content/uploads/2020/honeymoon/DCS 11072.jpg',
        	'picture5' => '',
        	'picture6' => '',
            'picture7' => '',
        	'picture8' => '',
        	'picture9' => '',
            'picture10' => '',
        	'acceptable_adults' => 2,
        	'acceptable_childen' => 0,
            'booked_from' => '',
        	'booked_to' => '',
            'status' => 'Available',
            'number_of_rooms'=>'1',
            'number_of_booked'=>'0',
            'url_name'=>'honeymoonsuite',
            'additional_information'=>'',
            'reviews_overal'=>'5',
            'reviews_percentages'=>'100'
        ]);
        
     

        $royalsuite = Room::create([
        	'name' => 'Royal Suite',
        	'description' => 'Strategically positioned in secluded area overlooking the lash garden. Offerings include mini lounge suit/TV viewing area, luxurious settings, work station, internet access, air conditioning, DSTV  television, mini bar, coffee maker, king size luxury bed, walk in closet, choice of bath tub and shower. Enjoy a five star experience for less.',
            'price' => '80',
            'picture1' => 'wp-content/uploads/2020/royal/1.jpg',
        	'picture2' => 'wp-content/uploads/2020/royal/DCS 11119.jpg',
        	'picture3' => 'wp-content/uploads/2020/royal/2.jpg',
            'picture4' => 'wp-content/uploads/2020/royal/DCS 11125.jpg',
        	'picture5' => 'wp-content/uploads/2020/royal/3.jpg',
        	'picture6' => 'wp-content/uploads/2020/royal/DCS 11129.jpg',
            'picture7' => '',
        	'picture8' => '',
        	'picture9' => '',
            'picture10' => '',
        	'acceptable_adults' => 3,
        	'acceptable_childen' => 2,
            'booked_from' => '',
        	'booked_to' => '',
            'status' => 'Available',
            'number_of_rooms'=>'1',
            'number_of_booked'=>'0',
            'url_name'=>'royalsuite',
            'additional_information'=>'',
            'reviews_overal'=>'5',
            'reviews_percentages'=>'100'
        ]);

        $familysuite = Room::create([
        	'name' => 'Family Suite',
        	'description' => 'This is your home away from home for family or friends. Extras include 2 bedrooms, 1 lounge, 1 open plan kitchen all fully furnished. A DSTV  television, microwave, internet naturally available. A real bargain',
            'price' => '70',
            'picture1' => 'wp-content/uploads/2020/family/DCS 11133.jpg',
        	'picture2' => 'wp-content/uploads/2020/family/DCS 11134.jpg',
        	'picture3' => 'wp-content/uploads/2020/family/DCS 11136.jpg',
            'picture4' => 'wp-content/uploads/2020/family/DCS 11287.jpg',
        	'picture5' => 'wp-content/uploads/2020/family/DCS 11288.jpg',
        	'picture6' => '',
            'picture7' => '',
        	'picture8' => '',
        	'picture9' => '',
            'picture10' => '',
        	'acceptable_adults' => 2,
        	'acceptable_childen' => 2,
            'booked_from' => '',
        	'booked_to' => '',
            'status' => 'Available',
            'number_of_rooms'=>'1',
            'number_of_booked'=>'0',
            'url_name'=>'familysuite',
            'additional_information'=>'',
            'reviews_overal'=>'5',
            'reviews_percentages'=>'100'
        ]);
        $deluxesuite = Room::create([
        	'name' => 'Deluxe Suite',
        	'description' => 'Classy comfortable welcoming rooms equipped with superior accessories. Extras include mini bar, relaxation facilities, work station, DSTV  television. Coffee making facilities. Designed to please.',
            'price' => '55',
            'picture1' => 'wp-content/uploads/2020/deluxe/DCS 11105.jpg',
        	'picture2' => 'wp-content/uploads/2020/deluxe/DCS 11106.jpg',
        	'picture3' => 'wp-content/uploads/2020/deluxe/DCS 11107.jpg',
            'picture4' => 'wp-content/uploads/2020/deluxe/DCS 11110.jpg',
        	'picture5' => 'wp-content/uploads/2020/deluxe/DCS 11112.jpg',
        	'picture6' => 'wp-content/uploads/2020/deluxe/DCS 11099.jpg',
            'picture7' => 'wp-content/uploads/2020/deluxe/DCS 11100.jpg',
        	'picture8' => 'wp-content/uploads/2020/deluxe/DCS 11101.jpg',
        	'picture9' => '',
            'picture10' => '',
        	'acceptable_adults' => 2,
        	'acceptable_childen' => 2,
            'booked_from' => '',
        	'booked_to' => '',
            'status' => 'Available',
            'number_of_rooms'=>'4',
            'number_of_booked'=>'0',
            'url_name'=>'deluxesuite',
            'additional_information'=>'',
            'reviews_overal'=>'5',
            'reviews_percentages'=>'100'
        ]);

        $standard = Room::create([
        	'name' => 'Standard Suite',
        	'description' => 'Prestine picture perfect unique rooms equipped with double bed, fridge, open view satellite television, internet access ensuit, coffee making machine, relaxation couch, glass table plus much more.',
            'price' => '45',
            'picture1' => 'wp-content/uploads/2020/standard/DCS 11291.jpg',
        	'picture2' => 'wp-content/uploads/2020/standard/DCS 11293.jpg',
        	'picture3' => 'wp-content/uploads/2020/standard/DCS 11295.jpg',
            'picture4' => 'wp-content/uploads/2020/standard/DCS 11300.jpg',
        	'picture5' => '',
        	'picture6' => '',
            'picture7' => '',
        	'picture8' => '',
        	'picture9' => '',
            'picture10' => '',
        	'acceptable_adults' => 2,
        	'acceptable_childen' => 2,
            'booked_from' => '',
        	'booked_to' => '',
            'status' => 'Available',
            'number_of_rooms'=>'2',
            'number_of_booked'=>'0',
            'url_name'=>'standardsuite',
            'additional_information'=>'',
            'reviews_overal'=>'5',
            'reviews_percentages'=>'100'
        ]);

        $budgetsuite = Room::create([
        	'name' => 'Budget Suite',
        	'description' => 'Comfortable and compact. Equipped with double bed, open view satellite television, internet access, hot  ensuit shower, coffee making facilities toiletries etc',
            'price' => '35',
            'picture1' => 'wp-content/uploads/2020/budget/DCS 11281.jpg',
        	'picture2' => 'wp-content/uploads/2020/budget/DCS 11280.jpg',
        	'picture3' => 'wp-content/uploads/2020/budget/DCS 11283.jpg',
            'picture4' => '',
        	'picture5' => '',
        	'picture6' => '',
            'picture7' => '',
        	'picture8' => '',
        	'picture9' => '',
            'picture10' => '',
        	'acceptable_adults' => 2,
        	'acceptable_childen' => 2,
            'booked_from' => '',
        	'booked_to' => '',
            'status' => 'Available',
            'number_of_rooms'=>'2',
            'number_of_booked'=>'0',
            'url_name'=>'budgetsuite',
            'additional_information'=>'',
            'reviews_overal'=>'5',
            'reviews_percentages'=>'100'
        ]);
    }
}
