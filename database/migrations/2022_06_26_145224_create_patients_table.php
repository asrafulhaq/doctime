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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email') -> unique() -> nullable();
            $table->string('password') -> nullable();
            $table->string('photo') -> nullable();
            $table->string('access_token') -> nullable();
            $table->string('facebook_id') -> nullable();
            $table->string('twitter_id') -> nullable();
            $table->string('linked_id') -> nullable();
            $table->string('google_id') -> nullable();
            $table->string('github_id') -> nullable();
            $table->boolean('status') -> default(false);
            $table->boolean('trash') -> default(false);
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
        Schema::dropIfExists('patients');
    }
};
