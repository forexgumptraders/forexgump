<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            // $table->string('image');
            $table->enum("orden", ["Compra", "Venta"]);
            $table->text('sl')->nullable();
            $table->text('tp')->nullable();
            $table->text('entrada')->nullable();
            $table->longText('body')->nullable();
            // $table->string('slug');

            $table->enum("estado", ["En curso", "Positiva", "Negativa"])->default("En curso");

            $table->enum('status', [1, 2])->default(1);
            
            $table->unsignedBigInteger('user_id')->nullable();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');



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
        Schema::dropIfExists('articles');
    }
}
