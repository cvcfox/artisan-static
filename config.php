<?php

return [
    'production' => true,
    'baseUrl' => 'https://cjamesfox.com/',
    'site' => [
        'title' => 'C. James Fox Photography',
        'description' => 'cjamesfox Photography.',
        'image' => 'default-share.png',
    ],
    'owner' => [
        'name' => 'Christopher James Fox',
    ],
    'links' => [
        'instagram' => 'https://www.instagram.com/cjamesfox/'
    ],
    'services' => [
        'cmsVersion' => '~2.10',
        'analytics' => 'UA-XXXXX-Y',
        'disqus' => 'artisanstatic',
        'formcarry' => 'x7n04aSHRaz',
        'cloudinary' => [
            'cloudName' => 'artisanstatic',
            'apiKey' => '365895137117119',
        ],
    ],
    'collections' => [
        'posts' => [
            'path' => 'posts/{filename}',
            'sort' => '-date',
            'extends' => '_layouts.post',
            'section' => 'postContent',
            'isPost' => true,
            'comments' => true,
            'tags' => [],
            'hasTag' => function ($page, $tag) {
                return collect($page->tags)->contains($tag);
            },
            'prettyDate' => function ($page, $format = 'M j, Y') {
                return date($format, $page->date);
            },
        ],
        'tags' => [
            'path' => 'tags/{filename}',
            'extends' => '_layouts.tag',
            'section' => '',
            'name' => function ($page) {
                return $page->getFilename();
            },
        ],
    ],
];
