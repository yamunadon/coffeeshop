<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePastriesTable extends Migration
{
    public function up()
    {
        Schema::create('pastries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('item_id')->constrained('items')->onDelete('cascade');
            $table->string('flavor');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pastries');
    }
}
