<?php

namespace Mistery23\ObjectRelations;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Mistery23\ObjectRelations\Classes\BelongsTo;
use Mistery23\ObjectRelations\Classes\BelongsToMany;
use Mistery23\ObjectRelations\Classes\HasMany;
use Mistery23\ObjectRelations\Classes\HasOne;

/**
 * Trait HasRelations
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

    /**
     * Instantiate a new BelongsTo relationship.
     *
     * @param  Builder $query
     * @param  Model   $child
     * @param  string  $foreignKey
     * @param  string  $ownerKey
     * @param  string  $relation
     *
     * @return BelongsTo
     */
    protected function newBelongsTo(Builder $query, Model $child, $foreignKey, $ownerKey, $relation)
    {
        return new BelongsTo($query, $child, $foreignKey, $ownerKey, $relation);
    }

    /**
     * Instantiate a new BelongsToMany relationship.
     *
     * @param  Builder $query
     * @param  Model   $parent
     * @param  string  $table
     * @param  string  $foreignPivotKey
     * @param  string  $relatedPivotKey
     * @param  string  $parentKey
     * @param  string  $relatedKey
     * @param  string  $relationName
     *
     * @return BelongsToMany
     */
    protected function newBelongsToMany(Builder $query, Model $parent, $table, $foreignPivotKey, $relatedPivotKey,
        $parentKey, $relatedKey, $relationName = null)
    {
        return new BelongsToMany($query, $parent, $table, $foreignPivotKey, $relatedPivotKey, $parentKey, $relatedKey, $relationName);
    }
}