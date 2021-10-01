<?php

    $autoloadPathForGithub = __DIR__ . '/../vendor/autoload.php';
    $autoloadPathForPackagist = __DIR__ . '/../../../autoload.php';

if (file_exists($autoloadPathForGithub)) {
    require_once($autoloadPathForGithub);
} else {
    require_once($autoloadPathForPackagist);
}

use function KseniaD2021\ticTacToe\Controller\key;

key();