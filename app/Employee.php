<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Employee extends Model
{
    public $fillable = [
        'employee_title','employee_title_ar','employee_title_gr','employee_image'
    ];
}
