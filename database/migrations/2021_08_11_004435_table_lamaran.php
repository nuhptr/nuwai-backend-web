<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableLamaran extends Migration
{
    public function up()
    {
        // TODO: input to database
        Schema::create("lamaran", function(Blueprint $table) {
            $table->id();

            $table->bigInteger("id_users");
            $table->bigInteger("id_pekerjaan");
            $table->timestamp("waktu_lamaran");

            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        // TODO: drop database
        Schema::dropIfExists("lamaran");
    }
}
