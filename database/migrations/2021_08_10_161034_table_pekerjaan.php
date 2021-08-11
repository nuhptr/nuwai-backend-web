<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TablePekerjaan extends Migration
{
    public function up()
    {
        // TODO: input to database
        Schema::create("pekerjaan", function(Blueprint $table) {
            $table->id();
            $table->string("nama_pekerjaan");
            $table->longText("deskripsi");
            $table->string("nama_perusahaan")->nullable();
            $table->double("gaji")->nullable();
            $table->string("logo_perusahaan_path", 2048)->nullable();
            $table->string("tentang_pembuka_lowongan")->nullable();
            $table->timestamp("tanggal_dibuat", 0);
            $table->dateTime("tenggang_waktu_pekerjaan", 0);
            $table->string("lokasi_pekerjaan");
            $table->enum("kategori", ["Perusahaan", "Perorangan"]);

            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        // TODO: drop database
        Schema::dropIfExists('pekerjaan');
    }
}
