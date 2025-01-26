<?php

declare(strict_types=1);

namespace PanchoDP\PrecioPonderado;

class PrecioPonderado
{
    /**
     * @param  array<array{precio: float, cantidad: float}>  $items
     */
    public function calcularPrecioPonderado(array $items): float
    {
        $total = 0;
        $totalCantidades = 0;

        foreach ($items as $item) {
            $total += $item['precio'] * $item['cantidad'];
            $totalCantidades += $item['cantidad'];
        }

        if ($totalCantidades === 0) {
            return 0;
        }

        if ($total === 0) {
            return 0;
        }

        return $total / $totalCantidades;
    }
}
