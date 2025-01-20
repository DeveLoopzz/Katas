<?php

require 'vendor/autoload.php';

use Intervention\Image\ImageManager;

$manager = new ImageManager(new \Intervention\Image\Drivers\Gd\Driver());

$image = $manager->read(input: 'src\1.png');

$image->resize(width:300,height:300);

$image->save('output.png');