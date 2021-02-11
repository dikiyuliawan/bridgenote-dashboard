<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BridgenoteUser extends Model
{
    use HasFactory;

    protected $table = 'bridgenote_user';

    protected $fillable = ['status', 'position'];
}
