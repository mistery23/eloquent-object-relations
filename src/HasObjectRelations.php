<?php

namespace Mistery23\EloquentObjectRelations;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use mistery23\EloquentObjectRelations\Classes\HasMany;
use mistery23\EloquentObjectRelations\Classes\HasOne;

/**
 * Trait HasRelations
 * @package mistery23\EloquentObjectRelations\Traits
 */
trait HasObjectRelations
{


    /**
     * @param Builder $query
     * @param Model   $parent
     * @param mixed   $foreignKey
     * @param mixed   $localKey
     *
     * @return HasMany
     */
    protected function newHasMany(Builder $query, Model $parent, $foreignKey, $localKey)
    {
        return new HasMany($query, $parent, $foreignKey, $localKey);
    }

    /**
     * @param Builder $query
     * @param Model   $parent
     * @param mixed   $foreignKey
     * @param mixed   $localKey
     *
     * @return HasOne
     */
    protected function newHasOne(Builder $query, Model $parent, $foreignKey, $localKey)
    {
        return new HasOne($query, $parent, $foreignKey, $localKey);
    }
}