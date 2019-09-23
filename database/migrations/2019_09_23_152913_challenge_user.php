<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChallengeUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('challenge_user', function (Blueprint $table) {
            $table->unsignedBigInteger('challenge_id');
            $table->unsignedBigInteger('user_id');

            $table->foreign('challenge_id')->references('id')->on('challenges');
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::table('users', function (Blueprint $table) {
            $table->integer('score')->after('email')->default(0);
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
            $table->dropColumn('score');
        });

        Schema::table('challenge_user', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['challenge_id']);
        });

        Schema::dropIfExists('challenge_user');
    }
}
