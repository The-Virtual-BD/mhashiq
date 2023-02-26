<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VolunteerExperience extends Model
{
    use HasFactory;

    protected $fillable = ['logo','designation','org_name','start','end'];
}
