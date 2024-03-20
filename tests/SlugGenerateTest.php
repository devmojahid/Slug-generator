<?php

use Mojahid\SlugGenerator\SlugGenerator;

it('can generate test string to slug', function () {
    $generateSLug = SlugGenerator::slug('test string')->gslug();
    expect($generateSLug)->tobe('test-string');
});