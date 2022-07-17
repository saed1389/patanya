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
        Schema::create('specialPost', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->integer('district_id');
            $table->integer('user_id');
            $table->string('title_en')->nullable();
            $table->string('title_tr');
            $table->string('title_ru')->nullable();
            $table->string('image');
            $table->text('images')->nullable();
            $table->text('details_en')->nullable();
            $table->text('details_tr');
            $table->text('details_ru')->nullable();
            $table->text('tag_en')->nullable();
            $table->text('tag_tr')->nullable();
            $table->text('tag_ru')->nullable();
            $table->string('post_date')->nullable();
            $table->string('post_month')->nullable();
            $table->integer('status')->default(0);
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
        Schema::dropIfExists('specialPost');
    }
};
