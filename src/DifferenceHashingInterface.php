<?php

namespace mseshachalam\TheSameCat;

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DifferenceHashingInterface
 *
 * @author seshachalam
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
