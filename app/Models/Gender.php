<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    protected $table = 'tbl_gender';
    protected $primaryKey = 'id';
    protected $fillable = ['gender',];
    use HasFactory;
}