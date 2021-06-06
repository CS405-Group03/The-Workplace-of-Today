<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();   
            $table->string('form_last_name');
            $table->string('form_first_name');
            $table->string('form_gender');
            $table->string('form_birthdate');
            $table->string('form_address');
            $table->string('form_contact_number');
            $table->string('form_username');
            // $table->string('password')->unique();
            $table->string('form_password');
            $table->string('form_confirm_password');
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
