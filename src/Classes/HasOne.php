<?php

namespace mistery23\EloquentObjectRelations\Classes;

use Illuminate\Database\Eloquent\Collection;

/**
 * Class HasOne
 *
 * @package mistery23\EloquentObjectRelations\Classes
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