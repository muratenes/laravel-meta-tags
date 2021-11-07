<div class="{{ config('metatags.card.class') }}">
    <div class="box-header">
        <h3 class="box-title">{{ config('metatags.card.title') }}</h3>
    </div>
    <div class="box-body">
        <div class="{{ config('metatags.item.type') == 'horizontal' ? 'form-horizontal' : 'form-row' }}">
            @foreach(config('metatags.fields') as $name => $field)

                <div class="form-group {{ config('metatags.item.type') == 'horizontal' ? '': config('metatags.item.width') }}">
                    <label class="{{ config('metatags.item.type') == 'horizontal' ? 'control-label ' .config('metatags.item.width')  : '' }}" for="{{ $name }}">
                        {{ $field['label'] }}
                        @if(isset($field['help']) and $field['help'])
                            <i class="fa fa-question-circle" title="{{ $field['help'] }}"></i>
                        @endisset
                    </label>
                    @if(config('metatags.item.type') == 'horizontal')
                        <div class="col-sm-10">
                            @endif
                            <input type="{{ $field['type'] ?? 'text' }}"
                                   name="{{ $name }}" class="form-control"
                                   maxlength="{{ $field['max_length'] ?? '255' }}"
                                   placeholder="{{ $field['placeholder'] ?? $field['label'] }}"
                                   value="{{ $item->meta_tag->{$name} }}"
                            >
                            @if(config('metatags.item.type') == 'horizontal')
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</div>
