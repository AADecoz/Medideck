<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('products')) {
            Schema::create('products', function (Blueprint $table) {
                $table->engine = 'InnoDB';
                $table->id('product_id');
                $table->string('product_name');
                $table->unique('product_name');
            });
        }

        Schema::table('products', function (Blueprint $table){
            $table->foreignId('atc_id')->constrained('atccodes','atc_id');
            $table->foreignId('sender_id')->constrained('senders', 'sender_id');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
