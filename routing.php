
<?php

    $page = isset($_GET['part']) ? trim(strtolower($_GET['part']))       : "forsíða";

    $allowedPages = array(
        'about'    => 'views/about.php',
        'comments' => 'views/comments.php',
        'forsíða'  => 'views/main.php',
        'skraning' => 'views/skraning.php',
        'pacman'   => 'views/pacman.php'
    );

    include( isset($allowedPages[$page]) ? $allowedPages[$page] : $allowedPages["forsíða"] );

?>