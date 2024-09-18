<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpertValue extends Model
{
    use HasFactory;

    protected $connection = 'sqlite';

    // Tentukan tabel yang digunakan model ini jika tidak sesuai dengan penamaan Laravel
    protected $table = "expert_values"; // Sesuaikan dengan nama tabel yang benar


    // Tentukan kolom yang bisa diisi secara massal
    protected $fillable = [              
                        "E1","E2","E3","E4","E5","E6","E7","E8","E9","E10",
                        "E11","E12","E13","E14","E15","E16","E17","E18","E19",
                        "E20","E21","E22","E23","E24","E25","E26","E27","E28","E29",
                        "E30","E31","E32","E33","E34","E35","E36","E37","E38"
                        ];
}
