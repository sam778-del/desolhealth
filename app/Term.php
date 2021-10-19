<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Term extends Model
{
    public $fillable = [
        'Terms_title','Terms_title_ar','Terms_title_ar_gr','Terms_dec','Terms_dec_ar','Terms_dec_gr','created_at','updated_at'
    ];
}
