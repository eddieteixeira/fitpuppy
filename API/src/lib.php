<?php declare(strict_types=1);

// Credits: https://github.com/desenvolvimento-web/crud-php/blob/master/src/lib.php

function route_is(string $method, string $uri): bool
{
    return $method === $_SERVER['REQUEST_METHOD'] && $_SERVER['REQUEST_URI'] === $uri;
}

function route_match(string $method, string $pattern): array
{
    if ($method !== $_SERVER['REQUEST_METHOD']) {
        return [];
    }

    if (preg_match($pattern, $_SERVER['REQUEST_URI'], $matches)) {
        return $matches;
    }

    return [];
}

function render(string $filename, array $data = []): string
{
    extract($data);
    ob_start();
    include $filename;
    $contents = ob_get_contents();
    ob_end_clean();
    return $contents;
}