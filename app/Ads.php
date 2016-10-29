<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Ads extends Eloquent
{
    protected $connection = 'mongodb';

    protected $collection = 'configuration_ads';

}


