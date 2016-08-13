<?php

include_once "src/ProductInterface.php";
include_once "src/Phone.php";
include_once "src/Notebook.php";

class Data
{
    public $products = array();

    public function __construct()
    {
        $this->products = array(
            new Phone("example", 100),
            new Phone("example2", 101),
            new Phone("example3", 102),
            new Phone("example", 100),
            new Phone("example2", 101),
            new Phone("example3", 102),
            new Phone("example", 100),
            new Phone("example2", 101),
        );
    }

    public function getProducts()
    {
        return $this->products;
    }

    public function getProductById($id)
    {
        if (isset($this->products[$id])) {
            return $this->products[$id];
        }

        return false;
    }

    public function getProductsByTitle($title)
    {
        
    }
}