<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

$_SERVER['APP_RUNTIME_MODE'] = 'server';

require __DIR__.'/autoload.php';

return function (array $context): void {
    echo 'From context ', $context['APP_RUNTIME_MODE'], ', from $_ENV ', $_ENV['APP_RUNTIME_MODE'];
};