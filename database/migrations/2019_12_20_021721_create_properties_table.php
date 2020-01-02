<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('slug_name')->unique();
            $table->double('area');
            $table->double('price', 8, 2);
            $table->string('feature_id')->default('');
            $table->integer('type_id');
            $table->string('image')->nullable();
            $table->string('province_id');
            $table->string('address');
            $table->integer('user_id');
            $table->text('description');
            $table->tinyInteger('isActive')->default('1');
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
        Schema::dropIfExists('properties');
    }
}
