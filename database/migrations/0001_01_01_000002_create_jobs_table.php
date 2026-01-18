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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();

            $table->foreignId('company_id')->constrained()->cascadeOnDelete();
            $table->foreignId('location_id')->constrained();
            $table->foreignId('job_type_id')->constrained();
            $table->foreignId('category_id')->nullable()->constrained('job_categories');

            $table->string('title');
            $table->string('slug')->unique();

            $table->text('description');

            $table->integer('salary_min')->nullable();
            $table->integer('salary_max')->nullable();

            $table->string('education')->nullable();

            $table->enum('status', ['pending','published','rejected'])
                ->default('pending');

            $table->timestamp('published_at')->nullable();

            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
        Schema::dropIfExists('job_batches');
        Schema::dropIfExists('failed_jobs');
    }
};
