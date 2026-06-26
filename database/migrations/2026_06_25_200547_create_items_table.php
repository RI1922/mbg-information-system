<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('items', function (Blueprint $table) {

            $table->id();

            $table->foreignId('category_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignId('unit_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->string('code',30)->unique();

            $table->string('barcode')->nullable();

            $table->string('name');

            $table->text('description')->nullable();

            $table->decimal('minimum_stock',15,2)->default(0);

            $table->decimal('maximum_stock',15,2)->default(0);

            $table->decimal('purchase_price',15,2)->default(0);

            $table->decimal('average_price',15,2)->default(0);

            $table->decimal('selling_price',15,2)->default(0);

            $table->boolean('is_active')->default(true);

            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};