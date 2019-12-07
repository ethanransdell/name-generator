<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuffixesTable extends Migration
{
    public function up()
    {
        Schema::create('suffixes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('value')->unique();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('suffixes');
    }
}
