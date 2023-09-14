<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApple extends Model
{
    use HasFactory;
    protected $fillable = [
        'full_name',
        'address',
        'gender',
        'age',
        'contact_info',
        'years_exp',
        'edu_info',
        'more_info',
        'cv_file_path',
        'job_id'
        ];
}
