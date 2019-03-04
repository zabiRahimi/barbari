<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bar extends Model
{
  public $timestamps = false;
  protected $guarded = ['id'];
}
