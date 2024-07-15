<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoffeesTable extends Migration
{
    public function up()
    {
        Schema::create('coffees', function (Blueprint $table) {
            $table->id();
            $table->foreignId('item_id')->constrained('items')->onDelete('cascade');
            $table->string('roast_level');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('coffees');
    }
}
