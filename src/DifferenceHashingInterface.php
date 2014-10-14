<?php

namespace mseshachalam\TheSameCat;

/**
 * DifferenceHashing(https://news.ycombinator.com/item?id=2614797)
 * Refer http://blog.iconfinder.com/detecting-duplicate-images-using-python/
 * @author abbiya@gmail.com
 */
interface DifferenceHashingInterface
{

    public function openImage();

    public function greyScaleImage();

    public function shrinkImageToCommonSize();

    public function compareAdjacentPixels();

    public function convertDifferenceIntoBits();

    public function compareHashes($hash1, $hash2);

}
