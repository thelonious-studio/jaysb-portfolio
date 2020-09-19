<?php

return [
    'production' => false,
    'baseUrl' => 'https://jaysonbrowne.com',
    'site' => [
        'title' => 'Jayson Browne',
        'description' => 'Portfolio',
		'image' => 'jayson_browne_front_end_developer_portfolio.jpg',
		'role' => 'Front end developer'
    ],
    'owner' => [
        'name' => 'Jayson Browne',
        'twitter' => 'jaysbrowne',
        'github' => 'jaysbrowne',
    ],
    'services' => [
        'analytics' => 'UA-XXXXX-Y',
        'cloudinary' => 'jaysbrowne',
    ],
    'collections' => [
        'casestudies' => [
            'path' => '/{filename}',
            'sort' => 'date',
            'extends' => '_layouts.casestudy',
            'section' => 'csContent',
            'isCaseStudy' => true,
            'comments' => false,
            'tags' => [],
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
    'excerpt' => function ($page, $limit = 250, $end = '...') {
        return $page->isCaseStudy
            ? str_limit_soft(content_sanitize($page->getContent()), $limit, $end)
            : null;
    },
    'imageCdn' => function ($page, $path) {
        return "https://res.cloudinary.com/{$page->services->cloudinary}/{$path}";
    },
];
