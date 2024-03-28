<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WaterWasteDischarge extends Model
{
    use HasFactory;
  protected $fillable = [
    'water_id',
    'industrial',
    'commercial',
    'domestic',
    'agriculture',
  ];
}