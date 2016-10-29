<?php

namespace App;

// use Cviebrock\EloquentSluggable\SluggableInterface;
// use Cviebrock\EloquentSluggable\SluggableTrait;
// use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Article extends Eloquent
{

	protected $dates = ['deleted_at','created_at'];

	protected $sluggable = [
		'build_from' => 'title',
		'save_to'    => 'slug',
	];

	protected $connection = 'mongodb';

    protected $collection = 'articles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'introduction','content', 'categories','slug','picture','picture_source','tags','summary','type','status','views'];

	

}
