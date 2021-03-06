<?php

declare(strict_types=1);

use Siler\Swoole;
use Siler\Twig;

return function () {
    $name = Swoole\request()->get['name'] ?? 'World';
    Swoole\emit(Twig\render('home.twig', ['name' => $name]));
};
