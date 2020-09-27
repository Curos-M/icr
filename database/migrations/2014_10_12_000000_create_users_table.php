<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->bigInteger('u_id');
            $table->string('u_nama_lengkap');
            $table->string('u_username');
            $table->string('u_password');
            $table->string('u_kontak')->nullable();
            $table->string('u_alamat')->nullable();
            $table->boolean('u_active');
            $table->bigInteger('u_dibuat_oleh');
            $table->timestamp('u_dibuat_pada');
            $table->bigInteger('u_diubah_oleh')->nullable();
            $table->timestamp('u_diubah_pada')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
