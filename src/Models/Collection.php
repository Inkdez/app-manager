<?php

namespace Inkdez\AppManager\Models;

use Database\Factories\CollectionFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Inkdez\AppManager\Support\Traits\Uuid;

class Collection extends Model
{
    use Uuid,HasFactory;

    protected $connection = "mysql";
    protected $fillable = [
        'application_id',
        'handle',
    ];

    /**
     * Get the user that owns the Collection
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function application(): BelongsTo
    {
        return $this->belongsTo(Application::class);
    }

    protected static function newFactory()
    {
        return CollectionFactory::new();
    }

}

