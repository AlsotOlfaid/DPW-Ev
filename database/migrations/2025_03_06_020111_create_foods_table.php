<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('foods', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('category', ['Frutas','Carnes','Panaderia','Lacteos','Verduras','Granos','Frutos Secos','Proteinas','Snacks','Condimentos','Endulzantes','Embutidos','Pastas'])->default('Frutas');
            $table->double('price');
            $table->boolean('organic');
            $table->boolean('gluten_free');
            $table->date('expiration_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foods');
    }
};
