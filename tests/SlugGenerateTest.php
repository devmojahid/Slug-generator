<?php

use Mojahid\SlugGenerator\SlugGenerator;

it('can generate test string to slug', function () {
    $generateSLug = SlugGenerator::slug('test string')->gslug();
    expect($generateSLug)->tobe('test-string');
});

it("should generate slug in ger method", function () {
    $generateSLug = SlugGenerator::slug('test string')->get();
    expect($generateSLug)->tobe('test-string');
});