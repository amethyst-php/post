<?php

namespace Amethyst\Schemas;

use Railken\Lem\Attributes;
use Railken\Lem\Schema;

class PostSchema extends Schema
{
    /**
     * Get all the attributes.
     *
     * @var array
     */
    public function getAttributes()
    {
        return [
            Attributes\IdAttribute::make(),
            Attributes\TextAttribute::make('title'),
            Attributes\LongTextAttribute::make('body')
                ->setRequired(true),
            Attributes\EnumAttribute::make('postable_type', app('amethyst')->getMorphListable('post', 'postable')),
            Attributes\MorphToAttribute::make('postable_id')
                ->setRelationKey('postable_type')
                ->setRelationName('postable')
                ->setRelations(app('amethyst')->getMorphRelationable('post', 'postable')),
            Attributes\CreatedAtAttribute::make(),
            Attributes\UpdatedAtAttribute::make(),
            Attributes\DeletedAtAttribute::make(),
        ];
    }
}
