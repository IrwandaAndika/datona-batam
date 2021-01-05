<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{

    protected $table = 'testimonials';
    protected $primaryKey = 'id';
    protected $fillable = ['id','author','company','description','image'];
}
