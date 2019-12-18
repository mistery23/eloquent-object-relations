<?php

namespace Mistery23\ObjectRelations\Classes;

use Illuminate\Database\Eloquent\Collection;

/**
 * Class HasOneOrMany
 */
class HasMany extends \Illuminate\Database\Eloquent\Relations\HasMany
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
