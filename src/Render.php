<?php

include_once __DIR__."/PhoneCart.php";

class Render
{
    public function prepare(Data $data, $ids)
    {
        $products = array();

        foreach ($ids as $id) {
            if (isset($products[$id])) {
                $products[$id]->qnt++;
            } else {
                $productDB = $data->getProductById($id);
                $productCart = new PhoneCart($productDB->title, $productDB->price);
                $products[$id] = $productCart;
            }
        }

        return $products;
    }

    public function JSON(Data $data, $ids)
    {
        $products = $this->prepare($data, $ids);

        return json_encode($products);
    }

    public function HTML(Data $data, $ids)
    {
        $products = $this->prepare($data, $ids);

        $result = "";
        if (count($products) == 0) {
            $result = "Корзина пуста";
        }

        foreach ($products as $id => $product) {
            $result .= "<div>" . $product->title . ", Цена " . $product->price . ", Количество " . $product->qnt . " <a class='product-rm' data-id='".$id."' href='javascript:{}'>Удалить</a> </div>";
        }

        return $result;
    }
}