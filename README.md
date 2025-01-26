<p align="center">
    <img src="./docs/precio-ponderado.png" height="300" alt="Precio Ponderado">
</p>

------


Este paquete calcula precio ponderado.

> **Requires [PHP 8.3+](https://php.net/releases/)**

## Installation

```bash
composer require panchodp/precio-ponderado
```

## Usage

```php
 $example = new PrecioPonderado;

    $items = [
        ['precio' => 10, 'cantidad' => 100],
        ['precio' => 20, 'cantidad' => 200],
        ['precio' => 30, 'cantidad' => 150],
    ];
    $result = $example->calcularPrecioPonderado($items);
    echo $result;
```


