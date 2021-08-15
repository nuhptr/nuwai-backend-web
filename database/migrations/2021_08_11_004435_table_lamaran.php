<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableLamaran extends Migration
{
    public function up()
    {
        // TODO: input to database
        Schema::create("lamarans", function(Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger("id_users");
            $table->unsignedBigInteger("id_pekerjaan");

            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        // TODO: drop database
        Schema::dropIfExists("lamarans");
    }
}
