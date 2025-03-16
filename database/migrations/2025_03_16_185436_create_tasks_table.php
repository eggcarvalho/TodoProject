<?php

use App\Models\Responsible;
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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Responsible::class)->onDelete('cascade')->onUpdate('cascade');
            $table->string('title');
            $table->text('description');
            $table->enum('status', ['to-do', 'in-progress', 'done'])->default('to-do');
            $table->boolean('ia_manager')->default(false);
            $table->longText('ia_path');
            $table->enum('priority', ['high', 'mid', 'low'])->default('low');
            $table->dateTime('deadline');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
