<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Session;

class Religion extends Model
{
    use HasFactory;

      protected $table = 'religion';
      protected $primaryKey = 'id';
}
