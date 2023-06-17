<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sellers_lists', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('bannerimg');
            $table->string('document');
            $table->string('number');
            $table->string('url_to_sell');
            $table->string('password');
            $table->string('namefantasy');
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
        //
    }
};
