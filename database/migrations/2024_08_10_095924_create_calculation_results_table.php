<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('averages', function (Blueprint $table) {
            $table->id();
            $table->integer('type'); // 1 for Tourist, 2 for Expert
            for ($i = 1; $i <= 38; $i++) {
                $table->decimal('Q' . $i, 8, 2)->nullable(false);
                $table->decimal('E' . $i, 8, 2)->nullable(false);
            }
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calculation_results');
    }
};
