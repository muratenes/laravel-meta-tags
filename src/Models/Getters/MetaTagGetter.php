<?php

namespace MuratEnes\LaravelMetaTags\Models\Getters;


trait MetaTagGetter
{
    /**
     * @param $value
     * @return mixed
     */
    public function getOgTitleAttribute($value)
    {
        return $value ?: $this->meta_title;
    }

    /**
     * @param $value
     * @return mixed
     */
    public function getTwitterTitleAttribute($value)
    {
        return $value ?: $this->meta_title;
    }
}
