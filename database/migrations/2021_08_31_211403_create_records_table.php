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
            $table->id()->primary();
            $table->string('theme');
            $table->foreign('products')->references('productid');
            $table->foreign('atccodes')->constrained();
//            $table->foreignId('format')->constrained();
//            $table->foreignId('subformat')->constrained();
//            $table->foreignId('media')->constrained();
            $table->dateTime('starttime');
            $table->dateTime('endtime');
            $table->foreignId('target')->constrained();
            $table->foreignId('sender')->constrained();
            $table->foreignId('indication')->constrained();
//            $table->foreignId('image');
//            $table->rememberToken();
            $table->timestamps();
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
