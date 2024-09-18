<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalculationResult extends Model
{
    protected $fillable = [
        'imVSE', 'imVSA', 'imVPr', 'imVFn', 'imVTr', 'imVSf', 'imVEj',
        'eVSE', 'eVSA', 'eVPr', 'eVFn', 'eVTr', 'eVSf', 'eVEj',
        'VSA', 'VSE', 'VPr', 'VFn', 'VTr', 'VSf', 'VEj',
        'MV', 'AV'
    ];
}
