<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJabatanUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jabatan_user', function (Blueprint $table) {
            $table->bigInteger('ju_id');
            $table->bigInteger('ju_jabatan_id');
            $table->bigInteger('ju_user_id');
            $table->boolean('ju_active');
            $table->bigInteger('ju_dibuat_oleh');
            $table->timestamp('ju_dibuat_pada');
            $table->bigInteger('ju_diubah_oleh')->nullable();
            $table->timestamp('ju_diubah_pada')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jabatan_users');
    }
}
