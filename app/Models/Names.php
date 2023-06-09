<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Names extends Model
{
    protected $table = 'tbl_patient';
    protected $primaryKey = 'id';
    protected $fillable = ['username', 'age', 'dob', 'gender', 'hospitalnumber'];
    use HasFactory;
}