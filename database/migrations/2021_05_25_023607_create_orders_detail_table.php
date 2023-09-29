<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders_detail', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('order_id')->unsigned();
            $table->string('nama_tukang');
            $table->string('jenis_keahlian');
            $table->string('total_biaya');
            $table->string('total_hari');
            $table->date('tanggal_mulai');
            $table->date('tanggal_akhir');
            $table->string('status');
            $table->string('status_pembayaran');
            $table->text('detail_alamat');
            $table->text('detail_order')->nullable();
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
        Schema::dropIfExists('orders_detail');
    }
}
