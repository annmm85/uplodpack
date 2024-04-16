<?php
namespace Uplod;

use src\Uplod;

function uplodition($_FILES): Uplod
{
    return new Uplod($_FILES);
}
