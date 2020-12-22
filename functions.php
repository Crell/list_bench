<?php
declare(strict_types=1);

function amap(iterable $iter, callable $fn): iterable
{
    $res = [];
    foreach ($iter as $k => $v) {
        $res[$k] = $fn($v);
    }
    return $res;
}

function imap(iterable $iter, callable $fn): iterable
{
    foreach ($iter as $k => $v) {
        yield $k => $fn($v);
    }
}
