<?php

namespace src;

class Uplod
{
    private array $array = [];

    public function __construct(array $array = [])
    {
        $this->array = $array;
    }
    public function files(): array
    {
        return $_FILES;
    }
    public function move_upl_file($image, $tmp_name, $direct_name, $name): array
    {
        return move_uploaded_file($_FILES[$image][$tmp_name], $direct_name . $_FILES[$image][$name]);
    }

}
