<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Social extends Eloquent
{
    protected $connection = 'mongodb';

    protected $collection = 'social_media';

}


