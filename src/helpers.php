<?php
namespace Uplod;

use src\Uplod;

function uplodition(array $_FILES=[], string $direct_name = ''): Uplod
{
    return new Uplod($_FILES, $direct_name);
}
