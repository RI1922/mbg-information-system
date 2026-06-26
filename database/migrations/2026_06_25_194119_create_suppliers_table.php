<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('suppliers', function (Blueprint $table) {

            $table->id();

            $table->foreignId('village_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->string('code',20)->unique();

            $table->string('name');

            $table->string('owner_name');

            $table->string('phone',20);

            $table->string('email')->nullable();

            $table->text('address');

            $table->string('postal_code',10)->nullable();

            $table->string('npwp')->nullable();

            $table->string('bank_name')->nullable();

            $table->string('bank_account')->nullable();

            $table->string('bank_holder')->nullable();

            $table->text('notes')->nullable();

            $table->boolean('is_active')
                ->default(true);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('suppliers');
    }
};