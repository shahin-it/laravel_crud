<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $fillable = ['name', 'parent_id', 'description'];

    public function parent() {
        return $this->hasOne('App\Models\Category', 'parent_id');
    }
}
