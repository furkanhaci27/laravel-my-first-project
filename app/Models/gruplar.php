<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gruplar extends Model
{
    use HasFactory;
  public $timestamps = true;
protected $table = 'gruplar';
protected $primaryKey = 'gid';
protected $fillable = ['grupadi'];
}
