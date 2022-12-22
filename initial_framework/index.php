<?php

//require 'router.php';
require 'functions.php';
require 'Database.php';

$config = require 'config.php';

$dp = new DataBase($config['db']);

$id = $_GET['id'];

$query = 'SELECT * FROM posts where id = :id'; // :any_word or use ?

$posts = $dp->query($query, ['id' => $id])->fetchAll();

foreach ($posts as $post) {
    echo '<li>' . $post['title'] . '</li>';
}