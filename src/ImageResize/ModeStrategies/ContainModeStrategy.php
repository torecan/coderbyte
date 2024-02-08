<?php

namespace ImageResize\ModeStrategies;

use ImageResize\ResizeStrategy;
use InvalidArgumentException;

class ContainModeStrategy implements ResizeStrategy
{
    public function resize($imageA, $imageB) {


        if ($imageA['height'] < 0 || $imageA['width'] < 0) {
            throw new InvalidArgumentException("Invalid dimensions for Image A");
        }

        if ($imageB['height'] < 0 || $imageB['width'] < 0) {
            throw new InvalidArgumentException("Invalid dimensions for Image A");
        }

        $aspectRatioB = $imageB['width'] / $imageB['height'];
        $newHeight = min($imageA['height'], $imageB['height']);

        $newWidth = $newHeight * $aspectRatioB;

        if ($newWidth > $imageA['width']) {
            $newWidth = $imageA['width'];
            $newHeight = $newWidth / $aspectRatioB;
        }

        return ['width' => $newWidth, 'height' => $newHeight];
    }
}
