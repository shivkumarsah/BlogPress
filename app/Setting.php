<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Setting extends Eloquent
{
    protected $connection = 'mongodb';

    protected $collection = 'configuration';

}


