<?php

namespace Inkdez\AppManager\Models;

use App\Models\User;
use Database\Factories\AppFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Inkdez\AppManager\Support\Traits\Uuid;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Application extends Model implements HasMedia
{
    use Uuid, InteractsWithMedia, HasFactory;

    protected $connection = 'mysql';

    protected $fillable = [
        'namespace',
        'handle',
        'description',
        'version',
        'custome_attributes',
        'user_id'
    ];

    protected $casts = [
        'custome_attributes' => 'json'
    ];

    /**
     * Get all of the comments for the Application
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function collections(): HasMany
    {
        return $this->hasMany(Collection::class);
    }

    public function company(): BelongsTo
    {
        return $this->belongsTo(User::class,'user_id');
    }


    protected static function newFactory()
    {
        return AppFactory::new();
    }
}
