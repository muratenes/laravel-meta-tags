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

    /**
     * get all database meta fields
     *
     * @return string[]
     */
    public static function meta_fields(): array
    {
        return array_keys(config('metatags.fields'));
    }

    /**
     * get all fields validation rules
     *
     * @return string[]
     */
    public static function validation_rules(): array
    {
        return collect(config('metatags.fields'))->mapWithKeys(function ($item, $key) {
            return [$key => $item['validation'] ?? 'nullable'];
        })->toArray();
    }

    /**
     * get fields when type = 'meta'
     *
     */
    public static function getFieldsByType(string $type = 'meta'): array
    {
        return collect(config('metatags.fields'))->filter(function ($item) use ($type) {
            return ($item['meta_type'] ?? false ) == $type;
        })->toArray();
    }
}
