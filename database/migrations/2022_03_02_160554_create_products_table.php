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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('slug')->unique();
            $table->text('short_description')->nullable();
            $table->text('description');
            $table->decimal('prix_pub');
            $table->decimal('prix_ini')->nullable();
            $table->enum('stock_status',['complet','disponible']);
            $table->string('image')->nullable();
            $table->text('images')->nullable();
            $table->string('trans');
            $table->integer('enfant')->nullable();
            $table->string('all_date')->nullable();
            $table->string('prix_date');
            $table->integer('eco')->nullable();
            $table->integer('bus')->nullable();
            $table->decimal('assur_mult')->nullable();
            $table->decimal('assur_annul')->nullable();
            $table->text('nom_ville')->nullable();
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
        Schema::dropIfExists('products');
    }
};
