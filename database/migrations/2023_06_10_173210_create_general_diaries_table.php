<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneralDiariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('general_diaries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('gd_no');
            $table->string('name');
            $table->string('fname');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('mobile');
            $table->string('emobile');
            $table->string('nid_num')->unique();
            $table->string('city');
            $table->string('union');
            $table->string('thana');
            $table->string('area');
            $table->string('profession');

            $table->string('crime_type');
            $table->string('c_city');
            $table->string('c_union');
            $table->string('c_thana');
            $table->string('c_area');
            $table->string('statement');
            $table->string('crime_time');
            $table->string('crime_date');

            $table->string('color_product');
            $table->string('product_document');
            $table->string('identifier_data');
            $table->string('addi_data_crime');
            $table->string('status');
            $table->rememberToken();
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
        Schema::dropIfExists('general_diaries');
    }
}
