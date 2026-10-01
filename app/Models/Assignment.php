<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

#[Fillable('title', 'department_id', 'area_id', 'due_at', 'dealer_id')]
#[Table('dealers')]

class Assignment extends Model
{
    //
}
