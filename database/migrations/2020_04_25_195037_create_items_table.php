<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->text('type')->nullable();
            $table->text('title')->nullable();
            $table->float('price')->nullable();
            $table->longText('description')->nullable();
            $table->integer('in_stock')->nullable();
            $table->text('brand')->nullable();
            $table->float('review')->nullable();
            $table->text('dimensions')->nullable();
            $table->text('processor')->nullable();
            $table->text('os')->nullable();
            $table->text('storage_capacity')->nullable();
            $table->integer('ram')->nullable();
            $table->text('colour')->nullable();
            $table->text('camera')->nullable();
            $table->integer('battery_capacity')->nullable();
            $table->string('images')->nullable();
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
        Schema::dropIfExists('items');
    }
}
