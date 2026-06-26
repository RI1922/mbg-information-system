<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('schools', function (Blueprint $table) {

            $table->id();

            $table->foreignId('sppg_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignId('village_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->string('npsn', 20)->unique();

            $table->string('name');

            $table->enum('level', [
                'TK',
                'SD',
                'SMP',
                'SMA',
                'SMK',
                'SLB',
            ]);

            $table->string('principal');

            $table->string('phone',20)->nullable();

            $table->string('email')->nullable();

            $table->text('address');

            $table->decimal('latitude',10,7)->nullable();

            $table->decimal('longitude',10,7)->nullable();

            $table->boolean('is_active')->default(true);

            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('schools');
    }
};