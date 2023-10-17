<?php

namespace src;


use src\Item;

class ShoppingCart
{


    // attributes
    private $itens;


    //method
    public function __construct()
    {
        $this->itens = [];
    }

    public function getItens(): array
    {
        return $this->itens;
    }

    public function addItem(Item $item): bool
    {
        array_push($this->itens, $item);
        return true;
    }

    public function validatedCart(): int
    {
        return count($this->itens) > 0;
    }


    /* // attributes
     private $itens;
     private $status;
     private $valueTotal;

     //method
     public function __construct()
     {
         $this->itens = [];
         $this->status = 'open';
         $this->valueTotal = 0;
     }

     public function  displayItems(): array
     {
         return $this->itens;
     }

     public function addItems(string $item, float $value): bool
     {
         array_push($this->itens, ["item" => $item, "value" => $value]);
         $this->valueTotal += $value;
         return true;
     }

     public function displayTotalValue(): int
     {
         return $this->valueTotal;
     }

     public function displayStatus(): string
     {
         return $this->status;
     }

     public function confirmOrders(): bool
     {
         if($this->validateAffection()) {
             $this->status = 'confirm';
             $this->sendConfirmationEmail();

             return true;
         }
         return false;
     }

     public function sendConfirmationEmail(): void
     {
         echo "<br/>... envio email de confirmação...<br/>";
     }

     public function validateAffection(): bool
     {
         return count($this->itens) > 0;
     }*/


}
