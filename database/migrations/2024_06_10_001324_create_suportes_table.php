<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create('suportes', function (Blueprint $table) {
      $table->id();
      $table->string('assunto', 50);
      $table->enum('status', ['a', 'i', 'p', 'c']);
      $table->text('corpo');
      $table->unsignedBigInteger('cat_id');
      //Cria uma chave estrangeira
      $table->foreign('cat_id')->references('id')->on('categories')->onUpdate('cascade')->onDelete('cascade');
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('suportes');
  }
};
