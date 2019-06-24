<?php

session_start();
session_id();

require 'models.php';

$articles = getArticles();

require 'views.php';




?>