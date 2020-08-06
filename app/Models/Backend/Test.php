<?php

namespace App\Models\Backend;


use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $fillable = ['name', 'key', 'status', 'created_by', 'updated_by'];

    protected $table = 'tests';

    public function setStatusAttribute($value)
    {
        $this->attributes['status'] = $value == 'publish'? 1: 0;
    }
    public function getStatusAttribute($value)
    {
        return $value == 1? 'publish' : 'un-publish';
    }
    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }

}
