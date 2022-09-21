<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class meslekler extends Model
{
    use HasFactory;
  public $timestamps = true;
protected $table = 'meslekler';
protected $primaryKey = 'mid';
protected $fillable = ['meslekadi'];
}
