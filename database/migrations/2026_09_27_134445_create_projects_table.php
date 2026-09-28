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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('category'); 
            $table->text('description');
            $table->string('image'); 
            $table->text('embed_url')->nullable(); 
            $table->string('pdf_file')->nullable(); 
            $table->string('github_url')->nullable();
            $table->string('website_url')->nullable();
            $table->string('figma_url')->nullable();
            $table->timestamps();
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
