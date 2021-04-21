<?php
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
            if(!isset($_SESSION["cart"])) {
                $_SESSION=[
                    'cart' => [],
                ];
            } else {
                $this->items = $_SESSION["cart"]["items"];
            }

        }

        public function __destruct() {
            $_SESSION["cart"]["items"] = $this->items;
        }


        public function add ($id, $quantity) {
            $product = $GLOBALS['products'][$id];
            if(!isset($product)) {
               $this->$errors['ProductNotFound'] = 'Ошибка добавления товара в корзину';
            }

            if(isset($this->items[$id])) {
                $this->items[$id]['quantity'] += $quantity;
            }

            if(isset($id) && isset($id) && !isset($this->items[$id])) {
                $this->items[$id]= [
                    'id'=> $id,
                    'name' => $product['name'],
                    'price'=> $product['price'],
                    'quantity' => $quantity,
                ];
            }
        }

        public function changeByStep($id, $step) {
            if(isset($this->items[$id])) {
                $this->items[$id]['quantity'] += $step;
            }

            if ($this->items[$id]['quantity'] == 0) {
                $this->delete($id);
            }
        }

        public function sum() {
            $quantity = 0;
            $sum = 0;
            if(isset($this->items) && (!empty($this->items))) {
                foreach ($this->items as $keyProduct => $product) {
                    $quantity += $product['quantity'];
                    $sumOneItemGood = $product['quantity'] * $product['price'];
                    $sum += $sumOneItemGood;


                    $this->count = $quantity;
                    $this->sum = $sum;
                }
            }
        }

         public function discount() {
             $sum = $this->getSum();
             $count = $this->getCount();
             $haveDiscount = false;
             
            if ($count >= 10 && $sum >= 2000 && !$haveDiscount) {
                $this->discount = 0.07;
                $haveDiscount = true;
            }

            if ($count >= 10 && !$haveDiscount) {
                $this->discount = 0.1;
                $haveDiscount = true;
            }

            if ($sum >= 2000 && !$haveDiscount ) {
                $this->discount = 0.07;
                $haveDiscount = true;
            }

            if ($this->discount > 0) {
                $this->sum =  $sum -($sum * $this->discount);
                $haveDiscount = false;
            }
         }

        public function delete($id) {
            if(isset($this->items[$id])) {
                unset($this->items[$id]);
            } else {
                return $this->errors = 'Ошибка удаления товара из корзины';
            }
        }

        public function getItems() {
            return $this->items;
        }

        public function getSum() {
            return $this->sum;
        }

        public function getCount() {
            return $this->count;
        }

        public function getDiscount() {
            return $this->discount;
        }
    }

?>

<!DOCTYPE html>
<html lang="en">