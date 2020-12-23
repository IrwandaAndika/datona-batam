<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expertise extends Model
{
    protected $table = 'expertises';
    protected $primaryKey = 'id';
    protected $fillable = ['title','content','image','link'];
}
