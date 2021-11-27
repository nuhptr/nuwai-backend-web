<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableUser extends Migration
{
    public function up()
    {
        // TODO: input table at user
        Schema::table("users", function (Blueprint $table) {
            $table->string("roles")->after("email")->default("USER");
            $table->string("alamat")->after("email")->nullable();
            $table->string("cv_path", 2048)->nullable();
        });
    }

    public function down()
    {
        // TODO: drop column
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn("roles");
            $table->dropColumn("alamat");
            $table->dropColumn("cv_path");
        });
    }
}
