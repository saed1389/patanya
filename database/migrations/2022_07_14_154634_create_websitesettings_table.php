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
        Schema::create('websitesettings', function (Blueprint $table) {
            $table->id();
            $table->string('logo');
            $table->string('logo_footer');
            $table->text('address_en');
            $table->text('address_tr');
            $table->text('address_ru');
            $table->string('phone');
            $table->string('email');
            $table->text('about_en');
            $table->text('about_tr');
            $table->text('about_ru');
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
        Schema::dropIfExists('websitesettings');
    }
};
