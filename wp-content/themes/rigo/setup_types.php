<?php

/**
 * To create new Post Types, you have to instanciate the PostTypesManager
*/
$typeManager = new \WPAS\Types\PostTypesManager([ 'namespace' => 'Rigo\\Types\\' ]);

/**
 * Then, start adding your types one by one.
*/
$typeManager->newType(['type' => 'course', 'class' => 'Course'])->register();
$typeManager->newType(['type' => 'fitness', 'class' => 'Fitness'])->register();
$typeManager->newType(['type' => 'spiritual', 'class' => 'Spiritual'])->register();
$typeManager->newType(['type' => 'inspirational', 'class' => 'Inspirational'])->register();

