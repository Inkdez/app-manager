<?php

namespace Inkdez\AppManager\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Entry extends Model
{
    protected $connection = "mysql";

    protected $casts = [
        'data' => 'array'
    ];

    protected $fillable = [
        'collection_id',
        'data',
    ];


    /**
     * Get the collection that owns the Entry
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function collection(): BelongsTo
    {
        return $this->belongsTo(Collection::class, 'collection_id');
    }


}

