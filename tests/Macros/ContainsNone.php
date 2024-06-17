<?php

use Illuminate\Support\Str;

it('provides containsNone macro for string class', function () {
    expect(Str::hasMacro('containsNone'))->toBeTrue();
});

it('can check if a string contains none of the needles using the string class', function () {
    $string = 'Hello World';

    expect(Str::containsNone($string, ['foo', 'bar']))->toBeTrue();
    expect(Str::containsNone($string, ['World']))->toBeFalse();
});

it('can check if a string contains none of the needles using the string class with ignore case', function () {
    $string = 'Hello World';

    expect(Str::containsNone($string, ['foo', 'bar'], true))->toBeTrue();
    expect(Str::containsNone($string, ['world'], true))->toBeFalse();
});

it('provides containsNone macro for stringable class', function () {
    expect(\Illuminate\Support\Stringable::hasMacro('containsNone'))->toBeTrue();
});

it('can check if a string contains none of the needles using the stringable class', function () {
    $stringableObject = Str::of('Hello World');

    expect($stringableObject->containsNone(['foo', 'bar']))->toBeTrue();
    expect($stringableObject->containsNone(['World']))->toBeFalse();
});

it('can check if a string contains none of the needles using the stringable class with ignore case', function () {
    $stringableObject = Str::of('Hello World');

    expect($stringableObject->containsNone(['foo', 'bar'], true))->toBeTrue();
    expect($stringableObject->containsNone(['world'], true))->toBeFalse();
});
