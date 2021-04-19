<?php
    session_start();


    $products = [
        2=>['name'=>'товар 1', 'price'=>100],
        7=>['name'=>'товар 2', 'price'=>200],
        43=>['name'=>'товар 3', 'price'=>300],
        50=>['name'=>'товар 4', 'price'=>400],
    ];

    class Cart {
        public $items;
        public $sum;
        public $discount;
        public $count;
        public $errors;

        public function __construct() {
            $this->items = [];
            $this->sum = 0;
            $this->$discount = 0;
            $this->$count = 0;
            $this->$errors = [];
        }


        public function addToExemplar ($id, $quantity) {
            $product = $GLOBALS['products'][$id];

            $this->items[$id]= [
                'id'=> $id,
                'name' => $product['name'],
                'price'=> $product['price'],
                'quantity' => $quantity,
            ];
        }


        public function add ($id, $quantity) {
            $product = $GLOBALS['products'][$id];

             $_SESSION['cart']['items'][$id] = [
                'id'=> $id,
                'name' => $product['name'],
                'price'=> $product['price'],
                'quantity' => $quantity,
            ];

        }
    }

    $userCart = new Cart();
?>

<!DOCTYPE html>
<html lang="en">