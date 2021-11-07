<?php


return [
    'card' => [
        'title' => 'SEO Optimizasyonu',
        'class' => 'box box-primary'
    ],
    'item' => [
        'width' => 'col-sm-2',
        'type' => 'horizontal'
    ],
    'fields' => [
        'meta_title' => [
            'label' => 'Sayfa Başlığı',
            'max_length' => 150,
            'placeholder' => 'Sayfa başlığı',
            'help' => '',
            'validation' => 'required|string|max:100'
        ],
        'meta_description' => [
            'label' => 'Sayfa Açıklaması',
            'max_length' => 255,
            'placeholder' => 'Sayfa hakkında kısa açıklama',
            'help' => ''
        ],
        'meta_keywords' => [
            'label' => 'Kelimeler',
            'max_length' => 255,
            'placeholder' => 'Kelimeler arasına virgül koyarak yazınız örnek: kelime1,kelime2',
        ],
        'og_title' => [
            'label' => 'OG Başlığı',
            'max_length' => 150,
            'placeholder' => 'Open Graph Sayfa başlığı',
            'help' => 'Boş bırakılırsa sayfa başlığını alır'
        ],
        'og_url' => [
            'label' => 'OG URL',
            'max_length' => 200,
            'placeholder' => 'Open Graph URL',
            'help' => ''
        ],
        'og_image' => [
            'label' => 'OG Image',
            'max_length' => 255,
            'placeholder' => 'Open Graph Image URL',
        ],
        'twitter_title' => [
            'label' => 'Twitter Başlık',
            'max_length' => 255,
            'placeholder' => 'Twitter Card Başlık',
            'help' => 'Bu alan boş bırakılırsa sayfa başlığı getirilir.'
        ],
        'twitter_card' => [
            'label' => 'Twitter Card',
            'max_length' => 255,
            'placeholder' => 'Twitter Card',
            'help' => 'summary,summary_large_image,app veya player olmalıdır.'
        ],
        'twitter_image_src' => [
            'label' => 'Twitter Görsel URL',
            'max_length' => 255,
            'placeholder' => 'Twitter Görsel URL',
        ]
    ]
];
