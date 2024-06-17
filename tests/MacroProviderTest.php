<?php

use WDR\Macros\Macros\Stringable\Abbreviate;
use WDR\Macros\Macros\Stringable\ContainsNone;
use WDR\Macros\MacrosServiceProvider;

it('can retrieve the string macros', function () {
    $macros = (new ReflectionClass(MacrosServiceProvider::class))->newInstanceWithoutConstructor()->getStringMacros();

    expect($macros)->toBeArray();
    expect($macros)->toHaveKey('abbreviate');
    expect($macros)->toHaveKey('containsNone');
    expect($macros['abbreviate'])->toBe(\WDR\Macros\Macros\String\Abbreviate::class);
    expect($macros['containsNone'])->toBe(\WDR\Macros\Macros\String\ContainsNone::class);
});

it('can retrieve the stringable macros', function () {
    $macros = (new ReflectionClass(MacrosServiceProvider::class))->newInstanceWithoutConstructor()->getStringableMacros();

    expect($macros)->toBeArray();
    expect($macros)->toHaveKey('abbreviate');
    expect($macros)->toHaveKey('containsNone');
    expect($macros['abbreviate'])->toBe(Abbreviate::class);
    expect($macros['containsNone'])->toBe(ContainsNone::class);
});
