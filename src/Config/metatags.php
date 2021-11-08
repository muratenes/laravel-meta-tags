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
            'validation' => 'nullable|string|max:100',
            'meta_type' => 'title'
        ],
        'meta_description' => [
            'label' => 'Sayfa Açıklaması',
            'max_length' => 255,
            'placeholder' => 'Sayfa hakkında kısa açıklama',
            'validation' => 'nullable|string|max:255',
            'help' => '',
            'meta_type' => 'meta'
        ],
        'meta_keywords' => [
            'label' => 'Kelimeler',
            'max_length' => 255,
            'placeholder' => 'Kelimeler arasına virgül koyarak yazınız örnek: kelime1,kelime2',
            'meta_type' => 'meta',
            'validation' => 'nullable|string|max:255',
        ],
        'og_title' => [
            'label' => 'OG Başlığı',
            'max_length' => 150,
            'placeholder' => 'Open Graph Sayfa başlığı',
            'help' => 'Boş bırakılırsa sayfa başlığını alır',
            'meta_type' => 'meta-property',
            'validation' => 'nullable|string|max:150',
        ],
        'og_url' => [
            'label' => 'OG URL',
            'max_length' => 200,
            'placeholder' => 'Open Graph URL',
            'help' => '',
            'meta_type' => 'meta-property',
            'validation' => 'nullable|string|max:200',
        ],
        'og_type' => [
            'label' => 'OG Type',
            'max_length' => 50,
            'placeholder' => 'Open Graph Type',
            'help' => 'https://ogp.me/#type_music.song adresinden tümünü görebilirsiniz.',
            'meta_type' => 'meta-property',
            'validation' => 'nullable|string|max:50',
        ],
        'og_image' => [
            'label' => 'OG Image',
            'max_length' => 255,
            'placeholder' => 'Open Graph Image URL',
            'meta_type' => 'meta-property',
            'validation' => 'nullable|string|max:255',
        ],
        'twitter_title' => [
            'label' => 'Twitter Başlık',
            'max_length' => 150,
            'placeholder' => 'Twitter Card Başlık',
            'help' => 'Bu alan boş bırakılırsa sayfa başlığı getirilir.',
            'meta_type' => 'meta',
            'validation' => 'nullable|string|max:150',
        ],
        'twitter_card' => [
            'label' => 'Twitter Card',
            'max_length' => 30,
            'placeholder' => 'Twitter Card',
            'help' => 'summary,summary_large_image,app veya player olmalıdır.',
            'meta_type' => 'meta',
            'validation' => 'nullable|string|max:30',
        ],
        'twitter_image_src' => [
            'label' => 'Twitter Görsel URL',
            'max_length' => 255,
            'placeholder' => 'Twitter Görsel URL',
            'meta_type' => 'meta',
            'validation' => 'nullable|string|max:255',
        ]
    ]
];
