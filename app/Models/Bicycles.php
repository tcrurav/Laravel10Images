<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bicycles extends Model
{
    use HasFactory;
    protected $table = 'bicycles';
    protected $fillable =  ['brand', 'model', 'image'];
}
