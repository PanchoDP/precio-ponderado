<?php

use PanchoDP\PrecioPonderado\PrecioPonderado;

it('Revisa cálculo de precio ponderado', function (): void {
    $example = new PrecioPonderado;

    $items = [
        ['precio' => 10, 'cantidad' => 1],
        ['precio' => 20, 'cantidad' => 2],
        ['precio' => 30, 'cantidad' => 3],
    ];

    $result = $example->calcularPrecioPonderado($items);

    expect($result)->toBe(23.333333333333332);
});

it('Revisa cálculo de precio ponderado cuando la suma de cantidad es cero', function (): void {
    $example = new PrecioPonderado;

    $items = [
        ['precio' => 10, 'cantidad' => 0],
        ['precio' => 20, 'cantidad' => 0],
        ['precio' => 30, 'cantidad' => 0],
    ];
    $result = $example->calcularPrecioPonderado($items);

    expect($result)->toBe(0.0);
});

it('Revisa cálculo de precio ponderado cuando los precios son cero', function (): void {
    $example = new PrecioPonderado;

    $items = [
        ['precio' => 0, 'cantidad' => 1],
        ['precio' => 0, 'cantidad' => 2],
        ['precio' => 0, 'cantidad' => 3],
    ];

    $result = $example->calcularPrecioPonderado($items);

    expect($result)->toBe(0.0);
});
