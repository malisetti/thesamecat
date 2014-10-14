<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Test
 *
 * @author seshachalam
 */
require_once __DIR__.'/vendor/autoload.php';
use mseshachalam\TheSameCat\DifferenceHashing;

//full path to image ?
$dHash = new DifferenceHashing('/home/seshachalam/Desktop/cat_grumpy_modif.png');

echo $dHash->openImage()->shrinkImageToCommonSize()->greyScaleImage()->compareAdjacentPixels()->convertDifferenceIntoBits();