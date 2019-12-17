<?php

namespace Mistery23\EloquentObjectRelations\Classes;

use Illuminate\Database\Eloquent\Collection;

/**
 * Class HasOne
 */
class HasOne extends \Illuminate\Database\Eloquent\Relations\HasOne
{


    /**
     * Build model dictionary keyed by the relation's foreign key.
     *
     * @param Collection $results
     *
     * @return array
     */
    protected function buildDictionary(Collection $results)
    {
        $foreign = $this->getForeignKeyName();

        return $results->mapToDictionary(
            static function ($result) use ($foreign) {
                return [(string)$result->{$foreign} => $result];
            }
        )->all();
    }
}
