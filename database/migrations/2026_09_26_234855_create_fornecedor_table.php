<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up(): void
    {
        Schema::create('fornecedor', function (Blueprint $table) {
            $table->id();
            $table->string('razao_social', 150);
            $table->string('nome_fantasia', 150)->nullable();
            $table->string('endereco', 255)->nullable();
            $table->string('fone', 20)->nullable();
            $table->string('email', 150)->nullable();
            $table->string('cnpj', 18)->nullable()->unique();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('fornecedor');
    }
};