<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatchMaking extends Model
{
    use HasFactory;
      protected $table = 'match_details';
    protected $primaryKey = 'id';
}
