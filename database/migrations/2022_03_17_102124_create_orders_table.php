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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('genre')->nullable();
            $table->string('first_name');
            $table->string('last_name');
            $table->bigInteger('phone');
            $table->string('email');
            $table->text('address');
            $table->string('ville');
            $table->integer('code_postal');
            $table->string('gender')->nullable();
            $table->string('Last_name_travel')->nullable();
            $table->string('First_name_travel')->nullable();
            $table->string('date_birth_travel')->nullable();
            $table->string('Last_name_kids')->nullable();
            $table->string('First_name_kids')->nullable();
            $table->string('date_birth_kids')->nullable();
            $table->string('Date_expiration');
            $table->integer('transactionReference');
            $table->string('date_birth');
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('prix');
            $table->integer('vol')->nullable();;
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
        Schema::dropIfExists('orders');
    }
};
