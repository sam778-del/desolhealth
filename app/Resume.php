<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Resume extends Model
{
    public $fillable = [
        'Name','Telephone','Message','Resume_File'
    ];
}
