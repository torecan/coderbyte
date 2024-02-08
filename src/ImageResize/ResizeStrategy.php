<?php

namespace ImageResize;

interface ResizeStrategy
{
    public function resize($imageA, $imageB);
}
