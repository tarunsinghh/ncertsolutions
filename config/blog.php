<?php
return [
	'name' => "Ncert Solutions",
	'title' => "Ncert Solutions",
    'subtitle' => 'Solve all questions of ncert on ncertsolved.com',
    'description' => 'Very basic and logical soltions to Ncert Maths problems',
	'author' => 'ncertsolved.com',
	'page_image' => 'home-bg.jpg',
    'posts_per_page' => 10,
    'rss_size' => 25,
    //'contact_email' => config('blog.contact_email'),
    'contact_email' => env('MAIL_FROM'),
	'uploads' => [
		'storage'   => env('UPLOADS_ENVIRONMENT'),
		'webpath'   => env('UPLOADS_WEBPATH'),
	],
];