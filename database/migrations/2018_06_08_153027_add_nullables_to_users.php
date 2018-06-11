<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNullablesToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('age')->nullable()->change();
            $table->string('sex')->nullable()->change();
            $table->text('about')->nullable()->change();
            $table->string('contact')->nullable()->change();
            $table->string('avatar')->nullable()->change();
            $table->string('nationality')->nullable()->change();
            $table->string('height')->nullable()->change();
            $table->string('weight')->nullable()->change();
            $table->string('level')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
