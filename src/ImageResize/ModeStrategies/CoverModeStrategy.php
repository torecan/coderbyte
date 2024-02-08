<?php

namespace ImageResize\ModeStrategies;

use ImageResize\ResizeStrategy;
use InvalidArgumentException;

class CoverModeStrategy implements ResizeStrategy
{

    function __construct()
    {
        echo "CoverModeStrategy works";
    }

    public function resize($imageA, $imageB)
    {

        if ($imageA['height'] < 0 || $imageA['width'] < 0) {
            throw new InvalidArgumentException("Invalid dimensions for Image A");
        }

        if ($imageB['height'] < 0 || $imageB['width'] < 0) {
            throw new InvalidArgumentException("Invalid dimensions for Image B");
        }

        $aspectRatioB = $imageB['width'] / $imageB['height'];
        $newWidth = $imageA['width'];
        $newHeight = $newWidth / $aspectRatioB;

//        var_dump($newHeight);
//        die();

        if ($newHeight < $imageA['height']) {
            $newHeight = $imageA['height'];
            $newWidth = $newHeight * $aspectRatioB;
        }

        return ['width' => $newWidth, 'height' => $newHeight];
    }
}
