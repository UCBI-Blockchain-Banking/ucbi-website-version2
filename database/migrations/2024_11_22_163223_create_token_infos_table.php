<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTokenInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('token_infos', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->text('contract')->nullable();
            $table->text('token_price')->nullable();
            $table->text('btc_wallet')->nullable();
            $table->text('eth_wallet')->nullable();
            $table->text('usdt_wallet')->nullable();
            $table->text('usdc_wallet')->nullable();
            $table->text('bnb_wallet')->nullable();
            $table->text('xrp_wallet')->nullable();
            $table->text('doge_wallet')->nullable();
            $table->text('ada_wallet')->nullable();
            $table->text('ltc_wallet')->nullable();
            $table->integer('verify')->default('0');
            $table->integer('status')->default('0');
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
        Schema::dropIfExists('token_infos');
    }
}
