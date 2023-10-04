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
        Schema::create('gados', function (Blueprint $table) {
            $table->id();
            $table->integer('codigo')->unique();
            $table->decimal('qtd_leite', 8, 2);
            $table->decimal('qtd_racao', 8, 2);
            $table->decimal('peso', 8, 2);
            $table->date('nascimento');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gados');
    }
};
