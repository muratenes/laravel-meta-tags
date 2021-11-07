@if($item->meta_tag->title)
    <title>{{ $item->meta_tag->title }}</title>
@endif
@foreach(\MuratEnes\LaravelMetaTags\Traits\MetaTaggable::getFieldsByType() as $name => $field)
    <meta name="{{ $name }}" content="{{ $item->meta_tag->{$name} }}"/>
@endforeach
@foreach(\MuratEnes\LaravelMetaTags\Traits\MetaTaggable::getFieldsByType('meta-property') as $name => $field)
    <meta property="{{ $name }}" content="{{ $item->meta_tag->{$name} }}"/>
@endforeach
