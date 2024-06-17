<?php

use Illuminate\Support\Str;

it('provides abbreviate macro for string class', function () {
    expect(Str::hasMacro('abbreviate'))->toBeTrue();
});

it('can abbreviate a string using the string class', function () {
    $string = 'Hello World';
    $abbreviated = Str::abbreviate($string);

    expect($abbreviated)->toBe('HW');
});

it('can abbreviate a string using the string class with custom delimiter and glue', function () {
    $string = 'Hello-World';
    $abbreviated = Str::abbreviate($string, '-', '*');

    expect($abbreviated)->toBe('H*W');
});

it('provides abbreviate macro for stringable class', function () {
    expect(\Illuminate\Support\Stringable::hasMacro('abbreviate'))->toBeTrue();
});

it('can abbreviate a string using the stringable class', function () {
    $stringableObject = Str::of('Hello World');

    expect((string) $stringableObject->abbreviate())->toBe('HW');
});

it('can abbreviate a string using the stringable class with custom delimiter and glue', function () {
    $stringableObject = Str::of('Hello-World');

    expect((string) $stringableObject->abbreviate('-', '*'))->toBe('H*W');
});
