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
            $table->string('id');
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->integer('age');
            $table->string('gender');
            $table->string('education');
            $table->mediumInteger('income');
            $table->string('city');
            $table->string('province');
            $table->string('country');
            $table->string('marital');
            $table->boolean('employed');
            $table->string('notemp')->nullable();
            $table->string('industry')->nullable();
            $table->integer('workers')->nullable();
            $table->string('comp_nature')->nullable();
            $table->boolean('credit_card');
            $table->string('e_pay');
            $table->boolean('child');
            $table->boolean('car');
            $table->boolean('travel');
            $table->boolean('run');
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
