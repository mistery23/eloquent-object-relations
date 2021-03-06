<?php

namespace Mistery23\ObjectRelations\Classes;

use Illuminate\Database\Eloquent\Collection;

/**
 * Class BelongsTo
 */
class BelongsTo extends \Illuminate\Database\Eloquent\Relations\BelongsTo
{


    /**
     * Match the eagerly loaded results to their parents.
     *
     * @param array      $models
     * @param Collection $results
     * @param string     $relation
     *
     * @return array
     */
    public function match(array $models, Collection $results, $relation)
    {
        $foreign = $this->foreignKey;

        $owner = $this->ownerKey;

        // First we will get to build a dictionary of the child models by their primary
        // key of the relationship, then we can easily match the children back onto
        // the parents using that dictionary and the primary key of the children.
        $dictionary = [];

        foreach ($results as $result) {
            $dictionary[(string)$result->getAttribute($owner)] = $result;
        }

        // Once we have the dictionary constructed, we can loop through all the parents
        // and match back onto their children using these keys of the dictionary and
        // the primary key of the children to map them onto the correct instances.
        foreach ($models as $model) {
            if (isset($dictionary[(string) $model->{$foreign}])) {
                $model->setRelation($relation, $dictionary[(string) $model->{$foreign}]);
            }
        }

        return $models;
    }
}
