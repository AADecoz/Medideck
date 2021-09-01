<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
            $table->id('record_id');
            $table->string('theme');
            $table->string('product');
            $table->string('atc');
//            $table->foreignId('format')->constrained();
//            $table->foreignId('subformat')->constrained();
//            $table->foreignId('media')->constrained();
            $table->dateTime('starttime');
            $table->dateTime('endtime');
            $table->string('target');
            $table->string('sender');
            $table->string('indication');
//            $table->foreignId('image');
//            $table->rememberToken();
            $table->timestamps();


            $table->foreign('product')->references('product_name')->on('products');
            $table->foreign('atc')->references('atccode')->on('atccodes');
            $table->foreign('target')->references('target_name')->on('targets');
            $table->foreign('sender')->references('sender_name')->on('senders');
            $table->foreign('indication')->references('indication_name')->on('indications');


            $table->engine = 'InnoDB';

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('records');
    }
}
