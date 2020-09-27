<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJabatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jabatan', function (Blueprint $table) {
            $table->bigInteger('j_id');
            $table->string('j_nama_jabatan');
            $table->string('j_unit');
            $table->string('j_detail')->nullable();
            $table->text('j_hak_akses')->nullable();
            $table->boolean('j_active');
            $table->bigInteger('j_dibuat_oleh');
            $table->timestamp('j_dibuat_pada');
            $table->bigInteger('j_diubah_oleh')->nullable();
            $table->timestamp('j_diubah_pada')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jabatans');
    }
}
