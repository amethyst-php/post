<?php

namespace Railken\Amethyst\Schemas;

use Illuminate\Support\Facades\Config;
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
        $postableConfig = Config::get('amethyst.post.data.post.attributes.postable.options');

        return [
            Attributes\IdAttribute::make(),
            Attributes\TextAttribute::make('title'),
            Attributes\LongTextAttribute::make('body'),
            Attributes\EnumAttribute::make('postable_type', array_keys($postableConfig)),
            Attributes\MorphToAttribute::make('postable_id')
                ->setRelationKey('postable_type')
                ->setRelationName('postable')
                ->setRelations($postableConfig),
            Attributes\CreatedAtAttribute::make(),
            Attributes\UpdatedAtAttribute::make(),
            Attributes\DeletedAtAttribute::make(),
        ];
    }
}
