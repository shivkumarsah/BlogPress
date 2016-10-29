<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Category extends Eloquent
{
    protected $dates = ['deleted_at','created_at'];

    protected $connection = 'mongodb';

    protected $collection = 'categories';
    protected $fillable = ['_id', 'parent'];

//     public function parent()
//	 {
//	 	return $this->belongsTo(Category::class, '_id');
//	 }

}


