<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MixedLoad extends Model
{
    use HasFactory;
  protected $fillable = [
    "energy_id",
    "energy_intensity",
    "energy",
    "co2"
  ];
}
