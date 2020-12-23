<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $table = 'type_cases';
    protected $primaryKey = 'id';
    protected $fillable = ['id','name'];

    public function cases()
    {
        return $this->hasMany('App\Cases');
    }
}
