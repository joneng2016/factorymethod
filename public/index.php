<?php

require_once "../vendor/autoload.php";

use App\ORellyFactoryMethod;

print("START TESTING FACTORY METHOD PATTERN\n");

print("testing OReillyFactoryMethod\n");
$factorMethodInstance = new ORellyFactoryMethod;
testFactoryMethod($factorMethodInstance);


function testFactoryMethod($factoryMethodInstance) {
    $phpUs = $factoryMethodInstance->makePHPBook("us");
    print('us php Author: '.$phpUs->getAuthor());
    print('us php Title: '.$phpUs->getTitle());

    $phpUs = $factoryMethodInstance->makePHPBook("other");
    print('other php Author: '.$phpUs->getAuthor());
    print('other php Title: '.$phpUs->getTitle());

    $phpUs = $factoryMethodInstance->makePHPBook("otherother");
    print('otherother php Author: '.$phpUs->getAuthor());
    print('otherother php Title: '.$phpUs->getTitle());
  }
