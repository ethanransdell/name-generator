<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrefixesTable extends Migration
{
    public function up()
    {
        Schema::create('prefixes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('value')->unique();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('prefixes');
    }
}
