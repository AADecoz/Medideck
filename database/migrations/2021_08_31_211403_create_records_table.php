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
//            $table->unsignedInteger('product');
//            $table->unsignedInteger('atc');
//            $table->foreignId('format')->constrained();
//            $table->foreignId('subformat')->constrained();
//            $table->foreignId('media')->constrained();
            $table->dateTime('starttime');
            $table->dateTime('endtime');
//            $table->unsignedInteger('target');
//            $table->unsignedInteger('sender');
//            $table->unsignedInteger('indication');
//            $table->foreignId('image');
//            $table->rememberToken();
            $table->timestamps();


            $table->foreignId('product_id')->constrained('products', 'product_id');
            $table->foreignId('atc_id')->constrained('atccodes', 'atc_id');
            $table->foreignId('target_id')->constrained('targets', 'target_id');
            $table->foreignId('sender_id')->constrained('senders', 'sender_id');
            $table->foreignId('indication_id')->constrained('indications', 'indication_id');


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
