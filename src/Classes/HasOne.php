<?php
/**
 * PHP version 7.3
 *
 * @package WebSystemsSolutions\EloquentObjectRelations\Classes
 * @author  Sviatoslav Breznitskyi <bugatis15@gmail.com>
 */

namespace WebSystemsSolutions\EloquentObjectRelations\Classes;

use Illuminate\Database\Eloquent\Collection;

/**
 * Class HasOne
 *
 * @package WebSystemsSolutions\EloquentObjectRelations\Classes
 */
class HasOne extends \Illuminate\Database\Eloquent\Relations\HasOne
{


    /**
     * Build model dictionary keyed by the relation's foreign key.
     *
     * @param  \Illuminate\Database\Eloquent\Collection  $results
     *
     * @return array
     */
    protected function buildDictionary(Collection $results)
    {
        $foreign = $this->getForeignKeyName();

        return $results->mapToDictionary(
            function ($result) use ($foreign) {
                return [(string)$result->{$foreign} => $result];
            }
        )->all();
    }
}