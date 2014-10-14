<?php
/**
 * dHash Test
 * @author abbiya@gmail.com
 */
 
require_once __DIR__.'/vendor/autoload.php';
use mseshachalam\TheSameCat\DifferenceHashing;

//full path to image ?
$dHash = new DifferenceHashing('/home/seshachalam/Desktop/cat_grumpy_modif.png');

echo $dHash->openImage()->shrinkImageToCommonSize()->greyScaleImage()->compareAdjacentPixels()->convertDifferenceIntoBits();
