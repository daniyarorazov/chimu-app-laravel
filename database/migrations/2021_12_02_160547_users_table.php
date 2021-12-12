<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('users');
        Schema::create('users', function(Blueprint $table) {
            $table->increments('id');
            $table->string('email', 255)->nullable(false)->unique('email');
            $table->string('name', 255)->nullable(false);
            $table->string('surname', 255)->nullable(false);
            $table->string('field_activity', 255)->nullable(true);
            $table->string('skills_tag', 255)->nullable(true);
            $table->string('country', 255)->nullable(false);
            $table->string('birthdate', 255)->nullable(false);
            $table->string('instagram', 255)->nullable(true);
            $table->string('telegram', 255)->nullable(true);
            $table->string('password', 255)->nullable(false);
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
        //
    }
}
