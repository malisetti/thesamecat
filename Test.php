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

$dHash = new DifferenceHashing('/home/seshachalam/Desktop/cat_grumpy_orig_step_1.png');

$dHash->openImage()->shrinkImageToCommonSize()->greyScaleImage()->compareAdjacentPixels()->convertDifferenceIntoBits();

print 'there';
die();