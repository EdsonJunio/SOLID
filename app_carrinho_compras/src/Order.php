<?php

namespace src;

use src\ShoppingCart;
class Order
{
    private $status;
    private $shoppingCart;
    private $orderValue;


    public function __construct()
    {
        $this->status = 'open';
        $this->shoppingCart = new ShoppingCart();
        $this->orderValue = 0;
    }

    public function getShoppingCart()
    {
        return $this->shoppingCart;
    }

    public function getStatus()
    {
       return $this->status;
    }

    public function setStatus(string $status): string
    {
        return $this->status = $status;
    }

    public function confirmation(): bool
    {
        if ($this->shoppingCart->validatedCart()) {
            $this->setStatus('Confirmation');
            return true;
        }

        return false;

    }






}