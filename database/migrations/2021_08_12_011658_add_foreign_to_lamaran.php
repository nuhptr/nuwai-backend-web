<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignToLamaran extends Migration
{
    public function up()
    {
        Schema::table('lamarans', function (Blueprint $table) {
            $table->foreign('id_users')->references('id')->on('users');
            $table->foreign('id_pekerjaan')->references('id')->on('pekerjaans');
        });
    }

    public function down()
    {
        Schema::table('lamarans', function (Blueprint $table) {
            $table->dropForeign('lamaran_id_users_foreign');
            $table->dropForeign('lamaran_id_pekerjaan_foreign');
        });
    }
}
