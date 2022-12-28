<?php

//require 'router.php';
require 'functions.php';
require 'Database.php';

$config = require 'config.php';

$dp = new DataBase($config['db']);

$id = $_GET['id'];

$query = 'SELECT * FROM notes'; // :any_word or use ?

$posts = $dp->query($query)->fetchAll();
dd($posts);
//foreach ($posts as $post) {
//    echo '<li>' . $post['title'] . '</li>';
//}