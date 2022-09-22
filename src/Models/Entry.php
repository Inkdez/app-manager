<?php

namespace Inkdez\AppManager\Models;

use Jenssegers\Mongodb\Eloquent\HybridRelations;
use Jenssegers\Mongodb\Eloquent\Model;

class Entry extends Model
{
    use HybridRelations;
    protected $guarded = ['_id'];
    protected $connection = 'mongodb';

}

