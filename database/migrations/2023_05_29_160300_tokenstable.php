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
        Schema::create('selllogindatas', function (Blueprint $table) {
            $table->id();
            $table->string('iduser');
            $table->string('sellerid');
            $table->string('token');
            $table->string('hash');
            $table->string('netandress');
            $table->timestamps();
        });
        Schema::create('userlogindata', function (Blueprint $table) {
            $table->id();
            $table->string('iduser');
            $table->string('sellerid');
            $table->string('token');
            $table->string('hash');
            $table->string('netandress');
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
