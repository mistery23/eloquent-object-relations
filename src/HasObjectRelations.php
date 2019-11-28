<?php
/**
 * PHP version 7.3
 *
 * @package WebSystemsSolutions\EloquentObjectRelations\Traits
 * @author  Sviatoslav Breznitskyi <bugatis15@gmail.com>
 */

namespace WebSystemsSolutions\EloquentObjectRelations;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use WebSystemsSolutions\EloquentObjectRelations\Classes\HasMany;
use WebSystemsSolutions\EloquentObjectRelations\Classes\HasOne;

/**
 * Trait HasRelations
 * @package WebSystemsSolutions\EloquentObjectRelations\Traits
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