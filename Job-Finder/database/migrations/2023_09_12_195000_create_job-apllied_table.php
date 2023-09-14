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
        Schema::create('job_apples', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('address');
            $table->string('gender');
            $table->date('age');
            $table->string('contact_info');
            $table->integer('years_exp');
            $table->string('edu_info');
            $table->text('more_info');
            $table->string('cv_file_path');
            $table->foreignId('job_id')->constrained('jobs'); 
            $table->timestamps();
        });
    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
