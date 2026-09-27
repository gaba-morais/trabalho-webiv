<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('produto', function (Blueprint $table) {
            $table->id();
            $table->integer('qtde_maxima')->nullable();
            $table->string('nome', 150);
            $table->string('embalagem', 50)->nullable();
            $table->integer('qtde_estoque')->nullable();
            $table->string('id_barra', 50)->nullable()->unique();
            $table->decimal('valor_compra', 10, 2)->nullable();
            $table->decimal('valor_venda', 10, 2)->nullable();

            $table->foreignId('categoria_id')
                  ->nullable()
                  ->constrained('categoria');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('produto');
    }
};