<?php

namespace MuratEnes\LaravelMetaTags\Traits;

use MuratEnes\LaravelMetaTags\Models\MetaTag;

trait MetaTaggable
{
    /**
     * Get the meta tag morph relation.
     */
    public function meta_tag()
    {
        return $this->morphOne(MetaTag::class, 'taggable')->withDefault();
    }
}
