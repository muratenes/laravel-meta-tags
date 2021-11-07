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
            'help' => ''
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
        ]
    ]
];
