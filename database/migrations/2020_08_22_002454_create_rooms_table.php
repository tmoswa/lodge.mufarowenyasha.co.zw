<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longtext('description');
            $table->string('price')->default('');
            $table->string('picture1')->default('');
            $table->string('picture2')->default('');
            $table->string('picture3')->default('');
            $table->string('picture4')->default('');
            $table->string('picture5')->default('');
            $table->string('picture6')->default('');
            $table->string('picture7')->default('');
            $table->string('picture8')->default('');
            $table->string('picture9')->default('');
            $table->string('picture10')->default('');
            $table->string('acceptable_adults')->default('');
            $table->string('acceptable_childen')->default('');
            $table->string('booked_from')->default('');
            $table->string('booked_to')->default('');
            $table->string('status')->default('Available');
            $table->string('number_of_rooms')->default('');
            $table->string('number_of_booked')->default('0');
            $table->string('url_name')->default('');
            $table->string('additional_information')->default('');
            $table->string('reviews_overal')->default('');
            $table->string('reviews_percentages')->default('');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rooms');
    }
}
