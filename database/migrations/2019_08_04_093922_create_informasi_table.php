<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_informasi', function (Blueprint $table) {
            $table->increments('id_informasi');
            $table->integer('id_kategori');
            $table->foreign('id_kategori')->references('id_kategori')->on('tbl_kategori');
            $table->text('title');
            $table->string('desc',100);
            $table->text('isi');
            $table->text('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tbl_informasi');
    }
}
