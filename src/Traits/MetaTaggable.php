<?php


trait MetaTaggable
{
    /**
     * Get the meta tag morph relation.
     */
    public function meta_tag()
    {
        return $this->morphOne(self::class, 'taggable');
    }
}
