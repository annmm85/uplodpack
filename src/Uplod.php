<?php

namespace src;

class Uplod
{
    private array $_FILES=[];
    private string $direct_name = '';

    public function __construct(array $_FILES=[], string $direct_name = '')
    {
        $this->array = $_FILES;
        $this->string = $direct_name;
    }

    public function move_upl_file($_FILES, $direct_name): bool
    {
        $uniqfile = uniqid(). $_FILES['image']['name'];
        if(move_uploaded_file($_FILES['image']['tmp_name'], $direct_name . $uniqfile)){
            return true;
        }else{
            return false;
        }
    }

//    public function files(): array
//    {
//        return $_FILES;
//    }
}
