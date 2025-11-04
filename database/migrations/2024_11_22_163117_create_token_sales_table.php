<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTokenSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('token_sales', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->longText('sub_title')->nullable();
            $table->string('amount')->nullable();
            $table->text('wallet')->nullable();
            $table->longText('txhash')->nullable();
            $table->text('twallet')->nullable();
            $table->string('email')->nullable();
            $table->string('ip_address')->nullable();
            $table->text('country')->nullable();
            $table->text('comments')->nullable();
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
        Schema::dropIfExists('token_sales');
    }
}
