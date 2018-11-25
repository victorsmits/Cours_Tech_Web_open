<?php
if (!isset($_POST["course"])& !isset($_POST['Cart'])){
    $current = 'home';
} else if (isset($_POST['Cart'])){
    $current = 'cart';
} else {
    $current = 'other';
}

require_once('view/headView.php');
require_once('model/cartModel.php');
require_once ('model/formation.php');

$FormaPHP = new Formation(
    'PHP',
    'Comprendre les bases de PHP',
    120,
    'Du 15 au 20 décembre 2018',
    'public/images/php-logo.png',
    'A good programmer is someone who always looks both ways before crossing a one-way street.',
    'Doug Linder'
);

$FormaJS = new Formation(
    'JAVASCRIPT',
    'Comprendre les bases de JAVASCRIPT',
    100,
    'Du 15 au 20 décembre 2018',
    'public/images/javascript-logo.png',
    'There are only two kinds of programming languages: those people always bitch about and those nobody uses.',
    'Bjarne Stroustrup'
);

$FormaPYTHON = new Formation(
    'PYTHON',
    'Comprendre les bases de PYTHON',
    150,
    'Du 15 au 20 décembre 2018',
    'public/images/Python-Logo.png',
    '"Python\'s a drop-in replacement for BASIC in the sense that Optimus Prime is a drop-in replacement for a truck."',
    'Anonymous'
);

$FormaJAVA = new Formation(
    'JAVA',
    'Comprendre les bases de JAVA',
    120,
    'Du 15 au 20 décembre 2018',
    'public/images/javalogo.png',
    '"If Java had true garbage collection, most programs would delete themselves upon execution."',
    'Robert Sewell. Programmer.'
);

$FormaC = new Formation(
    'C',
    'Comprendre les bases de la programmation en C',
    170,
    'Du 15 au 20 décembre 2018',
    'public/images/C-image.png',
    '"It\'s 5.50 a.m.... Do you know where your stack pointer is?"', 
    'Anonymous.'
);

$FormaCSHARP = new Formation(
    'C#',
    'Comprendre les bases de CSHARP',
    150,
    'Du 15 au 20 décembre 2018',
    'public/images/Csharp-image.png',
    'The best thing about a boolean is even if you are wrong, you are only off by a bit.',
    'Anonymous'
);

$instances = get_instances_of_class('Formation');
