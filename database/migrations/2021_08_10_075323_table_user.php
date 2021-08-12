<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableUser extends Migration
{
    public function up()
    {
        // TODO: input table at user
        Schema::table("users", function(Blueprint $table) {
            $table->string("roles")->after("email")->default("USER");
            $table->string("alamat")->after("email")->nullable();
            $table->enum("kewarganegaraan", ["Indonesia", "Luar Indonesia"])->after("email")->nullable();
            $table->enum("pendidikan", ["SD", "SMP", "SMA", "D3", "S1", "S2", "S3"])->after("email")->nullable();
            $table->string("skill")->after("email")->nullable();
            $table->string("prestasi")->after("email")->nullable();
            $table->string("posisi_terakhir_bekerja")->after("email")->nullable();
            $table->string("tempat_terakhir_bekerja")->after("email")->nullable();
            $table->double("lama_terakhir_bekerja")->after("email")->nullable();
        });
    }

    public function down()
    {
        // TODO: drop column
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn("roles");
            $table->dropColumn("alamat");
            $table->dropColumn("kewarganegaraan");
            $table->dropColumn("pendidikan");
            $table->dropColumn("skill");
            $table->dropColumn("prestasi");
            $table->dropColumn("posisi_terakhir_bekerja");
            $table->dropColumn("lama_terakhir_bekerja");
            $table->dropColumn("tempat_terakhir_bekerja");
        });
    }
}
