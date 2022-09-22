<?php

namespace Inkdez\AppManager\Support\Traits;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Inkdez\AppManager\Models\Application;

/**
 *  Relationship of App user and InkdezModels
 */
trait UserRelations
{

    /**
     * Get all of the comments for the UserRelations
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function applications(): HasMany
    {
        return $this->hasMany(Application::class);
    }
}
