<?php

namespace InkdezNamespace;
use Jenssegers\Mongodb\Eloquent\Model;

class InkdezModel  extends Model
{
    protected $collection = 'inkdez_collection';
    protected $connection = 'mongodb';
}
