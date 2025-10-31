<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userregister', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('first name');
            $table->string('last name');
            $table->string('email')->unique();
            $table->text('address');
            $table->string('password');
            $table->text('Contact');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('userregister');
    }
};
