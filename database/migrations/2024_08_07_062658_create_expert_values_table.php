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
        Schema::create('expert_values', function (Blueprint $table) {
            $table->id(); // ID sebagai unsignedBigInteger
            $table->float('E1')->nullable(false);
            $table->float('E2')->nullable(false);
            $table->float('E3')->nullable(false);
            $table->float('E4')->nullable(false);
            $table->float('E5')->nullable(false);
            $table->float('E6')->nullable(false);
            $table->float('E7')->nullable(false);
            $table->float('E8')->nullable(false);
            $table->float('E9')->nullable(false);
            $table->float('E10')->nullable(false);
            $table->float('E11')->nullable(false);
            $table->float('E12')->nullable(false);
            $table->float('E13')->nullable(false);
            $table->float('E14')->nullable(false);
            $table->float('E15')->nullable(false);
            $table->float('E16')->nullable(false);
            $table->float('E17')->nullable(false);
            $table->float('E18')->nullable(false);
            $table->float('E19')->nullable(false);
            $table->float('E20')->nullable(false);
            $table->float('E21')->nullable(false);
            $table->float('E22')->nullable(false);
            $table->float('E23')->nullable(false);
            $table->float('E24')->nullable(false);
            $table->float('E25')->nullable(false);
            $table->float('E26')->nullable(false);
            $table->float('E27')->nullable(false);
            $table->float('E28')->nullable(false);
            $table->float('E29')->nullable(false);
            $table->float('E30')->nullable(false);
            $table->float('E31')->nullable(false);
            $table->float('E32')->nullable(false);
            $table->float('E33')->nullable(false);
            $table->float('E34')->nullable(false);
            $table->float('E35')->nullable(false);
            $table->float('E36')->nullable(false);
            $table->float('E37')->nullable(false);
            $table->float('E38')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expert_values');
    }
};
