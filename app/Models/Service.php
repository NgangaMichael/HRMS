<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'tbl_service';
    protected $primaryKey = 'id';
    protected $fillable = ['service', 'insurance', 'hospitalnumber'];
    use HasFactory;
}