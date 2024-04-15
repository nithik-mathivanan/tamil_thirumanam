<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Session;

class Employment extends Model
{
    use HasFactory;

      protected $table = 'employment';
      protected $primaryKey = 'id';
}
