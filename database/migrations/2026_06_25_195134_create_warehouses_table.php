<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('warehouses', function (Blueprint $table) {

            $table->id();

            $table->foreignId('sppg_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignId('village_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->string('code',20)->unique();

            $table->string('name');

            $table->enum('type',[
                'Gudang Utama',
                'Gudang Cabang',
                'Gudang Produksi',
                'Cold Storage'
            ]);

            $table->integer('capacity')->default(0);

            $table->string('manager');

            $table->string('phone',20)->nullable();

            $table->text('address');

            $table->decimal('latitude',10,7)->nullable();

            $table->decimal('longitude',10,7)->nullable();

            $table->boolean('is_active')->default(true);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('warehouses');
    }
};