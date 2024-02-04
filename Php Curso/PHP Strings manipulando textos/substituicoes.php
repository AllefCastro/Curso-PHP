<?php


$texto = 'Texto com      coisa poxa e caramba';

echo str_replace(['poxa','caramba'], '***', $texto) . PHP_EOL;