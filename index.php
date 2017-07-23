<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
require('Dijkstra.php');

$path = [];

$graph = array(
    'A' => array('B' => 3, 'D' => 3, 'F' => 6),
    'B' => array('A' => 3, 'D' => 1, 'E' => 3),
    'C' => array('E' => 2, 'F' => 3),
    'D' => array('A' => 3, 'B' => 1, 'E' => 1, 'F' => 2),
    'E' => array('B' => 3, 'C' => 2, 'D' => 1, 'F' => 5),
    'F' => array('A' => 6, 'C' => 3, 'D' => 2, 'E' => 5),
);

$g = new Dijkstra($graph);

?>

<img src="sample.png">
<br><?php print_r($g->shortestPath('D', 'C')); ?>
<br><?php print_r($g->shortestPath('C', 'A')); ?>
<br><?php print_r($g->shortestPath('B', 'F')); ?>
<br><?php print_r($g->shortestPath('F', 'A')); ?>
<br><?php print_r($g->shortestPath('A', 'G')); ?>
