<?php
//$totalItems = 301;
//$itemsPerPage = 25;
//
//$pageCount = ceil($totalItems/$itemsPerPage);
//
//if ($pageCount > 1){
//    for ($i = 1; $i <= $pageCount; $i++){
//        echo '<a href="?page='. $i .'">' . $i . '</a>,', ' ';
//    }
//}

$topics = [
    [
        'id' => 1,
        'title' => 'La meilleure façon d\'apprendre php?',
        'posts'=> [
            ['body' => 'Pratiquez beaucoup!'],
            ['body' => 'Travaillez sur un projet.'],
        ]
    ],
    [
        'id' => 1,
        'title' => 'Comment peux-je utiliser un foreach loop?',
        'posts' => [
            ['body' => 'Il faut juste regarder cette partie.'],
            ['body' => 'Non mais c\'est incroyable!'],
        ]
    ]
];

foreach ($topics as $topic) {
//    echo $topic['title'], '<br>';
    echo '<h1>'. $topic['title'] . '</h1>';
    foreach ($topic['posts'] as $post) {
        echo '<p>' . $post['body'] . '</p>';
    }
}