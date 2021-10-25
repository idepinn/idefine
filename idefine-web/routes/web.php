<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {
$idea_posts = [
    [
        "title" => "Find group of farmer",
        "slug" => "find-group-of-farmer",
        "author" => "Frilyan Juanda",
        "category" => "Farmer"
    ],
    [
        "title" => "Make financial Partner",
        "slug" => "make-financial-partner",
        "author" => "Ervin Ahmad",
        "category" => "Fintech"
    ]
];
    return view('home', [
        "title" => "Home",
        "name" => "One Agustiranda",
        "image" => "profile.jpg",
        "posts" => $idea_posts
    ]);
});

Route::get('/connection', function () {
    return view('connection', [
        "title" => "Connection"
    ]);
});

Route::get('/idea', function () {
    return view('idea', [
        "title" => "Idea"
    ]);
});

// Single page from idea
Route::get('/idea/{slug}', function ($slug) {
    $idea_posts = [
        [
            "title" => "Find group of farmer",
            "slug" => "find-group-of-farmer",
            "author" => "Frilyan Juanda",
            "category" => "Farmer",
            "article" => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna. Nunc viverra imperdiet enim. Fusce est. Vivamus a tellus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin pharetra nonummy pede. Mauris et orci. Aenean nec lorem.
                        In porttitor. Donec laoreet nonummy augue. Suspendisse dui purus, scelerisque at, vulputate vitae, pretium mattis, nunc. Mauris eget neque at sem venenatis eleifend. Ut nonummy. Fusce aliquet pede non pede. Suspendisse dapibus lorem pellentesque magna. Integer nulla. Donec blandit feugiat ligula. Donec hendrerit, felis et imperdiet euismod, purus ipsum pretium metus, in lacinia nulla nisl eget sapien.
                        Donec ut est in lectus consequat consequat. Etiam eget dui. Aliquam erat volutpat. Sed at lorem in nunc porta tristique. Proin nec augue. Quisque aliquam tempor magna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc ac magna. Maecenas odio dolor, vulputate vel, auctor ac, accumsan id, felis. Pellentesque cursus sagittis felis.
                        "
        ],
        [
            "title" => "Make financial Partner",
            "slug" => "make-financial-partner",
            "author" => "Ervin Ahmad",
            "category" => "Fintech",
            "article" => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna. Nunc viverra imperdiet enim. Fusce est. Vivamus a tellus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin pharetra nonummy pede. Mauris et orci. Aenean nec lorem. In porttitor. Donec laoreet nonummy augue. Suspendisse dui purus, scelerisque at, vulputate vitae, pretium mattis, nunc. Mauris eget neque at sem venenatis eleifend.
                        Ut nonummy. Fusce aliquet pede non pede. Suspendisse dapibus lorem pellentesque magna. Integer nulla. Donec blandit feugiat ligula. Donec hendrerit, felis et imperdiet euismod, purus ipsum pretium metus, in lacinia nulla nisl eget sapien. Donec ut est in lectus consequat consequat. Etiam eget dui. Aliquam erat volutpat. Sed at lorem in nunc porta tristique. Proin nec augue. Quisque aliquam tempor magna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc ac magna.
                        "
        ]
    ];

    $new_post = [];
    foreach($idea_posts as $post){
        if($post["slug"] === $slug){
            $new_post = $post;
        }
    }

    return view('ideapost',[
        "title" => "Idea Post",
        "post" => $new_post
    ]);
});

Route::get('/login', function () {
    return view('login', [
        "title" => "Login"
    ]);
});
