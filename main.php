<?php

require __DIR__ . '/vendor/autoload.php';


use ImageResize\ModeStrategies\ContainModeStrategy;
use ImageResize\ModeStrategies\CoverModeStrategy;


//$imageA = ['width' => -5, 'height' => 250];
$imageA = ['width' => 500, 'height' => 250];
$imageB = ['width' => 360, 'height' => 200];


$containModeStrategy = new ContainModeStrategy();
$coverModeStrategy = new CoverModeStrategy();

$resizedContain = $containModeStrategy->resize($imageA, $imageB);
$resizedCov = $coverModeStrategy->resize($imageA, $imageB);


var_dump($resizedContain);
var_dump($resizedCov);
