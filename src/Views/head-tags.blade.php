@if($item->meta_tag->meta_title)
    <title>{{ $item->meta_tag->meta_title }}</title>
@endif
@foreach(\MuratEnes\LaravelMetaTags\Traits\MetaTaggable::getFieldsByType() as $name => $field)
    <meta name="{{ $field['key'] }}" content="{{ $item->meta_tag->{$name} }}"/>
@endforeach
@foreach(\MuratEnes\LaravelMetaTags\Traits\MetaTaggable::getFieldsByType('meta-property') as $name => $field)
    <meta property="{{ $field['key'] }}" content="{{ $item->meta_tag->{$name} }}"/>
@endforeach
