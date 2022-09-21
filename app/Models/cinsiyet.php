<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cinsiyet extends Model
{
    use HasFactory;
  public $timestamps = true;
protected $table = 'cinsiyet';
protected $primaryKey = 'cid';
protected $fillable = ['cinsiyet'];
}
