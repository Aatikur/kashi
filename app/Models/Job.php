<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = 'jobs';
    protected $fillable = ['full_name', 'email', 'mobile', 'designation', 'resume', 'status'];
    protected $primaryKey = 'id';
}