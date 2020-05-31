<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['user_id', 'edu_dept', 'edu_school', 'company_name', 'work_position', 'profile_img'];
}
