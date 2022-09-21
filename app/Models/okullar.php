<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class okullar extends Model
{
    use HasFactory;
  public $timestamps = true;
protected $table = 'okullar';
protected $primaryKey = 'okulid';
protected $fillable = ['okuladi','ili'];
}
