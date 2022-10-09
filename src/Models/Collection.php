<?php

namespace Inkdez\AppManager\Models;

use App\Casts\Field as FieldCast;

use Database\Factories\CollectionFactory;
use Illuminate\Database\Eloquent\Casts\AsCollection;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Inkdez\AppManager\Support\Traits\HasUuid;

class Collection extends Model
{
    use HasUuid,HasFactory;

    protected $connection = "mysql";

    protected $casts = [
        'settings' => 'json',
    ];
    protected $appends = ['parsed_settings'];

    protected $fillable = [
        'application_id',
        'name',
        'settings',
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

    /**
     * Get all of the entries for the Collection
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function entries(): HasMany
    {
        return $this->hasMany(Entry::class);
    }


    public function getParsedSettingsAttribute()
    {
        return (new FieldCast())->get($this,'settings',$this->settings,[
            'settings'
        ]);
    }

}

