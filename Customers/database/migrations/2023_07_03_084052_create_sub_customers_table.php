<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubCustomersTable extends Migration
{
    public function up()
    {
        Schema::create('sub_customers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('parent_id');
            $table->foreign('parent_id')->references('id')->on('customers');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('address');
            $table->string('id_card_number');
            $table->enum('gender', ['Male', 'Female']);
            $table->date('birthdate');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sub_customers');
    }
}
