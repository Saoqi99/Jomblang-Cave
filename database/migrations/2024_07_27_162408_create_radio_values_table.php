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
        Schema::create('radio_values', function (Blueprint $table) {
            $table->id(); // ID sebagai unsignedBigInteger
            $table->float('Q1')->nullable(false);
            $table->float('Q2')->nullable(false);
            $table->float('Q3')->nullable(false);
            $table->float('Q4')->nullable(false);
            $table->float('Q5')->nullable(false);
            $table->float('Q6')->nullable(false);
            $table->float('Q7')->nullable(false);
            $table->float('Q8')->nullable(false);
            $table->float('Q9')->nullable(false);
            $table->float('Q10')->nullable(false);
            $table->float('Q11')->nullable(false);
            $table->float('Q12')->nullable(false);
            $table->float('Q13')->nullable(false);
            $table->float('Q14')->nullable(false);
            $table->float('Q15')->nullable(false);
            $table->float('Q16')->nullable(false);
            $table->float('Q17')->nullable(false);
            $table->float('Q18')->nullable(false);
            $table->float('Q19')->nullable(false);
            $table->float('Q20')->nullable(false);
            $table->float('Q21')->nullable(false);
            $table->float('Q22')->nullable(false);
            $table->float('Q23')->nullable(false);
            $table->float('Q24')->nullable(false);
            $table->float('Q25')->nullable(false);
            $table->float('Q26')->nullable(false);
            $table->float('Q27')->nullable(false);
            $table->float('Q28')->nullable(false);
            $table->float('Q29')->nullable(false);
            $table->float('Q30')->nullable(false);
            $table->float('Q31')->nullable(false);
            $table->float('Q32')->nullable(false);
            $table->float('Q33')->nullable(false);
            $table->float('Q34')->nullable(false);
            $table->float('Q35')->nullable(false);
            $table->float('Q36')->nullable(false);
            $table->float('Q37')->nullable(false);
            $table->float('Q38')->nullable(false);
            $table->timestamps();
        });

        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('radio_values');
    }
};