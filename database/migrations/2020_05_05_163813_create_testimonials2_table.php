<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestimonials2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testimonials2', function (Blueprint $table) {
            $table->id();
            $table->string('texte', 300);
            $table->string('img_path', 100);
            $table->string('name', 20);
            $table->string('surname', 20);
            $table->string('work', 30);
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
        Schema::dropIfExists('testimonials2');
    }
}
