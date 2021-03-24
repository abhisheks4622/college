<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
	protected $fillable = ['name','course','rollno','dob','contactno'];
	  use SoftDeletes;
    use HasFactory;
}
