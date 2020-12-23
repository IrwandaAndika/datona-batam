<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cases extends Model
{
    protected $table = 'cases';
    protected $primaryKey = 'id';
    protected $fillable = ['id','name','type_id','content'];

    public function type()
    {
        return $this->belongsTo('App\Type');
    }
}
