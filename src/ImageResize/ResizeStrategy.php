<?php

namespace ImageResizer;

interface ResizeStrategy
{
    public function resize($imageA, $imageB);
}
