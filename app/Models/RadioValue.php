<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RadioValue extends Model
{
    use HasFactory;

    protected $connection = 'sqlite';

    // Tentukan tabel yang digunakan model ini jika tidak sesuai dengan penamaan Laravel
    protected $table = "radio_values"; // Sesuaikan dengan nama tabel yang benar


    // Tentukan kolom yang bisa diisi secara massal
    protected $fillable = ["Q1","Q2","Q3","Q4","Q5","Q6","Q7","Q8","Q9","Q10",
                        "Q11","Q12","Q13","Q14","Q15","Q16","Q17","Q18","Q19",
                        "Q20","Q21","Q22","Q23","Q24","Q25","Q26","Q27","Q28","Q29",
                        "Q30","Q31","Q32","Q33","Q34","Q35","Q36","Q37","Q38"];

                    
                 
}
