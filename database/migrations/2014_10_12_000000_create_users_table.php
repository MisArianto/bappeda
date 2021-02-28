<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',35);
            $table->string('username', 50)->unique();
            $table->string('email', 50)->unique();
            $table->string('password',100);
            $table->string('level',10);
            $table->string('fb',50);
            $table->string('ig',50);
            $table->text('bio',10);
            $table->string('image')->default('foto.jpeg');
            $table->string('status',10);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
